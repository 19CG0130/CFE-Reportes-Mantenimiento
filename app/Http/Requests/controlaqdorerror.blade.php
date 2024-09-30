<?php


public function store(Request $request)
{
	$request->validate([
		'zona' => ['required'],
		'departamento' => ['required']
		'hora_inicio' => ['required'],
		'hora_fin' => ['required'],
		'usuario' => ['required','max:30'],
		'puesto' => ['required','max:30'],
		'rpe' => ['required','max:30'],
		'servicio' => ['required'],
		'marca' => ['required','max:30'],
		'modelo' => ['required','max:30'],
		'serie' => ['required','max:30'],
		'num_activo_fijo' => ['required','max:30'],
		'' => ['required','max:30'],
	])
}
