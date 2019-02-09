<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DepartamentoControllador extends Controller
{
    public function index() {
        echo "<h4>Lista de Departamentos</h4>";
        echo "<ul>
            <li>Departamento 1</li>
            <li>Departamento 2</li>
            <li>Departamento 3</li>
        </ul>";

        // => Verificando se o Usuario está logado
        if(Auth::check()) {
            $user = Auth::user();
            echo $user->name;
        }else {
            echo "Você não está logado";
        }
    }
}
