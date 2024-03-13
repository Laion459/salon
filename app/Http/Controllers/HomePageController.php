<?php

namespace App\Http\Controllers;

use App\Models\HomePage;
use Illuminate\Http\Request;
use Illuminate\View\View;

class HomePageController extends Controller
{
    /**
     * Call Home page Salon.
     */
    public function home():View
    {
        return view('salon');
    }

    /**
     * Show history salon.
     */
    public function history():View
    {
        return view('history.history');
    }

    /**
     * Call page Contacts.
     */
    public function contacts():View
    {
        return view('contacts.contacts');
    }

    /**
     * Call page Services.
     */
    public function cortes():View
    {
        return view('services.cortes');
    }

    public function coloracao():View
    {
        return view('services.coloracao');
    }

    public function tonalizacao():View
    {
        return view('services.tonalizacao');
    }

    public function reflexo():View
    {
        return view('services.reflexo');
    }

    public function escova():View
    {
        return view('services.escova');
    }

    public function hidratacao():View
    {
        return view('services.hidratacao');
    }

    public function depilacao():View
    {
        return view('services.depilacao');
    }

    public function manicure():View
    {
        return view('services.manicure');
    }

    public function maquiagem():View
    {
        return view('services.maquiagem');
    }

    public function sobrancelhas():View
    {
        return view('services.sobrancelhas');
    }

    public function massagem():View
    {
        return view('services.massagem');
    }
}
