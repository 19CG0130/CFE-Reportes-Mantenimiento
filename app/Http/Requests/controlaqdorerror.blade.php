<?php


public function store(Request $request)
{
	$request->validate([
		'zona' => ['required'],
		'departamento' => ['required']
		'horaInicio' => ['required'],
		'horaFin' => ['required'],
		'usuario' => ['required','max:30'],
		'puesto' => ['required','max:30'],
		'RPE' => ['required','max:30'],
		'servicio' => ['required'],
		'marca' => ['required','max:30'],
		'modelo' => ['required','max:30'],
		'serie' => ['required','max:30'],
		'numActivoFijo' => ['required','max:30'],
		'' => ['required','max:30'],
	])
}
