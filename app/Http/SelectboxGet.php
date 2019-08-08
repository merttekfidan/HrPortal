<?php
namespace App\Http;

use App\Models\AccountingPeriod;
use App\Models\Term;
use App\Models\Semester;
use App\Models\Language;
use App\Models\TypeOfClass;

class selectboxGet
{
    private function getAccountingPeriods()
    {
        $accountingPeriods = AccountingPeriod::all();
        return $accountingPeriods;
    }
    private function getSemesters()
    {
        $semesters = Semester::all();
        return $semesters;
    }
    private function getTerms()
    {
        $terms = Term::all();
        return $terms;
    }
    private function getLanguages()
    {
        $languages = Language::all();
        return $languages;
    }
    public function fillSelectbox(array $selectboxes)
    {
        $query=array();
        if ($selectboxes) {
            foreach ($selectboxes as $name) {
                switch ($name) {
                case 'accountingPeriods':
                    $accountingPeriods=$this->getAccountingPeriods();
                    $query= $query + compact('accountingPeriods');
                    break;
                case 'semesters':
                    $semesters=$this->getSemesters();
                    $query= $query + compact('semesters');
                    break;
                case 'terms':
                    $terms=$this->getTerms();
                    $query= $query + compact('terms');
                    break;
                case 'languages':
                    $languages=$this->getLanguages();
                    $query= $query + compact('languages');
                    break;
                default:
                  // code...
                  break;
            }
            }
        }

        return $query;
    }
}
