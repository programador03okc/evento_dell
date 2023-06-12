<?php

namespace App\Http\Controllers;

use Exception;
use App\User;
use Carbon\Carbon;
use App\Models\Cliente;
use App\Mail\MessageReceived;
use App\Mail\MessageReceptor;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Database\QueryException;
use App\Http\Requests\ClienteFormRequest;

class ClienteController extends Controller
{

    public function index()
    {
        $evento = $this->listEvento();
        $tipoparticipante = $this->listTipoParticipante();
        return view('welcome', ['evento' => $evento, 'tipoparticipante' => $tipoparticipante]);
    }

    public function evento()
    {
        $evento = $this->listEvento();
        $tipoparticipante = $this->listTipoParticipante();

        return view('evento', ['evento' => $evento, 'tipoparticipante' => $tipoparticipante]);
    }

    public function store(ClienteFormRequest $request)
    {
        
        DB::beginTransaction();
        try {

            $cliente = new Cliente();
            $cliente->nombres = $request->input('nombres');
            $cliente->apellidos = $request->input('apellidos');
            $cliente->email = $request->input('email');
            $cliente->telefono = $request->input('telefono');
            $cliente->tipoparticipante = $request->input('tipoparticipante');
            $cliente->dni = $request->input('dni');
            //$cliente->especialidad = $request->input('especialidad');
            //$cliente->pais = $request->input('pais');

            $cliente->campaign_source = $request->input('utm_source');
            $cliente->campaign_medium = $request->input('utm_medium');
            $cliente->campaign_name = $request->input('utm_campaign');
            $cliente->campaign_term = $request->input('utm_term');
            $cliente->campaign_content = $request->input('utm_content');
            $cliente->procedencia = $request->input('procedencia');


            $cliente->idcampania = config('app.campaign_code');
            $cliente->edad = 99;

            $cliente->save();

           Mail::to($cliente->email)->send(new MessageReceived($cliente));
           Mail::to('mkt.okcomputer.2022@gmail.com')->send(new MessageReceptor($cliente));

            DB::commit();
            return redirect()->route('thanks');

        } catch (QueryException $e) {
            DB::rollback();
            //dd($e);
            $duplicateEntry = 1062; // registro duplicado
            $messageUser;

            if (count($e->errorInfo)) {
                if ($e->errorInfo[1] == $duplicateEntry) {
                    $messageUser = ['warning' => 'La dirección de correo electrónico que ha ingresado ya está registrada.'];
                } else {
                    $messageUser = ['failed' => 'Ocurrió un error inesperado. Intente nuevamente más tarde.'];
                }

            } else {
                $messageUser = ['failed' => 'Ocurrió un error inesperado. Intente nuevamente más tarde.'];
            }

            return back()->withInput()->with($messageUser);
        } catch (Exception $e) {
            DB::rollback();
           //dd($e);
            return back()->withInput()->with('failed', 'Ocurrió un error inesperado. Intente nuevamente más tarde.');
        }
    }

    public function test()
    {
        $data = $this->listProfessions();

        return ['data' => $data];
    }

    private function listTipoParticipante()
    {
        $years = [
            "Institución",
            "Empresa",

        ];

        // $currentYear = Carbon::now()->year + 1;
        // $minYear = 2016;

        // for ($i = $currentYear; $i >= $minYear; $i--) {
        //     $years[] = $i;
        // }

        return $years;
    }

    private function listEvento(){
        $professions = [
            "Lunes 18 Oct – 7pm | Enfermería: El rol del técnico de Enfermería en Áreas Críticas y su aplicación en las enfermedades emergentes",
            "Lunes 18 Oct – 8pm | Farmacia: Competencias del profesional técnico en la industria farmacéutica",
            "Martes 19 Oct – 7pm | Fisioterapia: Enfoque de la Rehabilitación frente al COVID-19: Pacientes críticos y agudos",
            "Martes 19 Oct – 8pm | Nutrición: El impacto de la comida rápida vs. comida lenta en nuestro organismo  ",
            "Miérc. 20 Oct – 7pm | Prótesis: Conociendo en Profundo el Mundo de los Ataches",
            "Miérc. 20 Oct – 8pm | SSO: Perfil del Supervisor de Seguridad y Salud Ocupacional en las organizaciones",
            "Jueves 21 Oct – 7pm | Cosmiatría: Todo sobre Dermapen: innovadora terapia médico-estética",
            "Jueves 21 Oct – 8pm | Laboratorio: GeneXpert MTB/RIF - exámen de biología molecular como herramienta de apoyo al diagnóstico de la TBC",
            "Viernes 22 OCT Conferencia Magistral - 1:00 p.m. | Conferencia Magistral: ¿Cómo lograr el éxito en mi carrera?",
        ];

        return $professions;
    }
}
