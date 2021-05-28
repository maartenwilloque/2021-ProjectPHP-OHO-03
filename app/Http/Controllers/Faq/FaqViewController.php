<?php

namespace App\Http\Controllers\Faq;

use App\FaqTabel;
use App\Helpers\Json;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FaqViewController extends Controller
{
    public function index()
    {
        $faqApprover = FaqTabel::Orderby('vraag')->where('userRol','=','Approver')->get();          // get all Faqs
        $faqFinance = FaqTabel::Orderby('vraag')->where('userRol','=','Financieel medewerker')->get();
        $faqActive = FaqTabel::Orderby('vraag')->where('userRol','=','Active')->get();
        $result = compact('faqApprover','faqFinance','faqActive');
        Json::dump($result);

        return view('faq.index',$result);
    }
}
