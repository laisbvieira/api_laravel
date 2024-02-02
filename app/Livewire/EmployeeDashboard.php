<?php

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class EmployeeDashboard extends Component
{
    public $employees = [];
    public $report = [];

    public function mount()
    {
        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->get('http://127.0.0.1:8000/api/Employees');
            $this->employees = json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            $this->addError('employees', 'Erro ao buscar dados dos funcionários.');
        }

        try {
            $client = new \GuzzleHttp\Client();
            $response = $client->get('http://127.0.0.1:8000/api/Employees/report');
            $this->report = json_decode($response->getBody(), true);
        } catch (\Exception $e) {
            $this->addError('report', 'Erro ao buscar dados do relatório.');
        }
    }

    public function render()
    {
        return view('livewire.employee-dashboard');
    }
}

