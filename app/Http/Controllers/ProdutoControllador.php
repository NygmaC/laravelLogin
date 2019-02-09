<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutoControllador extends Controller
{
    public function __construct() {
        $this->middleware('auth');
    }
    public function index() {
        echo "<h4>Lista de Produtos</h4>";
        echo "<ul>
            <li>Coffee</li>
            <li>Tea</li>
            <li>Milk</li>
        </ul>";
    }
}
