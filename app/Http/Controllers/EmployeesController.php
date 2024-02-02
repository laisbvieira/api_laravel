<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use App\Models\Employees;


class EmployeesController extends Controller
{
    public function index(): JsonResponse
    {
        $employees = Employees::all();

        if ($employees->isEmpty()) {
            return response()->json(['message' => 'Nenhum funcionário encontrado.'], 404);
        }

        return response()->json($employees);
    }

    public function show($id): \Illuminate\Http\JsonResponse
    {
        if (!is_numeric($id) || $id <= 0) {
            return response()->json([
                'status' => 'ERROR',
                'message' => 'ID inválido. Deve ser um número inteiro positivo.',
            ], 400);
        }

        $employee = Employees::find($id);

        if (!$employee) {
            return response()->json([
                'status' => 'ERROR',
                'message' => "Funcionário com o ID $id não encontrado",
            ], 404);
        }

        return response()->json([
            'status' => 'SUCCESS',
            'message' => 'Funcionário encontrado com sucesso',
            'employee' => $employee,
        ]);
    }


    public function store(Request $request): \Illuminate\Http\JsonResponse
    {
        $request->validate([
            'nome' => 'required',
            'sobrenome' => 'required',
            'idade' => 'required',
            'sexo' => 'required|in:masculino,feminino',
        ]);

        $newEmployee = Employees::create($request->all());

        return response() ->json([
            'status' => 'SUCCESS',
            'message' => 'Funcionário cadastrado com sucesso',
            'employee' => $newEmployee,
        ]);
    }

    public function update(Request $request, $id): \Illuminate\Http\JsonResponse
    {

        if (!ctype_digit($id)) {
            return response()->json([
                'status' => 'ERROR',
                'message' => 'ID inválido. Deve ser um número inteiro positivo.',
            ], 400);
        }

        $request->validate([
            'nome' => 'required',
            'sobrenome' => 'required',
            'idade' => 'required|integer',
            'sexo' => 'required|in:masculino,feminino',
        ]);

        $employee = Employees::find($id);

        if (!$employee) {
            return response()->json([
                'status' => 'ERROR',
                'message' => "Funcionário de id $id não encontrado."], 404);
        }

        $employee->update($request->all());

        return response()->json([
            'status' => 'SUCCESS',
            'message' => 'Funcionário editado com sucesso',
            'employee' => $employee,
        ]);
    }


    public function destroy($id): \Illuminate\Http\JsonResponse
    {
        if (!ctype_digit($id)) {
            return response()->json([
                'status' => 'ERROR',
                'message' => 'ID inválido. Deve ser um número inteiro positivo.',
            ], 400);
        }

        $employee = Employees::find($id);

        if (!$employee) {
            return response()->json([
                'status' => 'ERROR',
                'message' => "Funcionário de id $id não encontrado."
            ],
                404);
        }

        $employee->delete();

        return response()->json([
            'status' => 'SUCCESS',
            'message' => "Funcionário de id $id removido com sucesso."
        ]);
    }


    public function report(): \Illuminate\Contracts\View\View|\Illuminate\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\Foundation\Application
    {
        $totalMen = Employees::where('sexo', 'masculino')->count();
        $totalWomen = Employees::where('sexo', 'feminino')->count();
        $averageAge = round(Employees::avg('idade'), 2);
        $youngestAge = Employees::min('idade');
        $oldestAge = Employees::max('idade');

        $data = [
            'totalMen' => $totalMen,
            'totalWomen' => $totalWomen,
            'averageAge' => $averageAge,
            'youngestAge' => $youngestAge,
            'oldestAge' => $oldestAge,
        ];

        return view('report', $data);
    }



}
