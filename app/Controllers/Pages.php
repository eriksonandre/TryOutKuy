<?php

namespace App\Controllers;

class Pages extends BaseController
{

	public function login()
	{
		$data['Judul'] = "Halaman Login";
		return view('/pages/login', $data);
	}

	public function register()
	{
		return view('/pages/register', ['Judul' => "Halaman Register"]);
	}

	public function faq()
	{
		$data['data_faqs'] = [
			[
				'pertanyaan' => 'Website apa ini?',
				'jawaban' => 'Ini merupakan website untuk mengikuti tryout'
			],
			[
				'pertanyaan' => 'Soal apa saja yang ada?',
				'jawaban' => 'Soalnya ada soal TO SD, SMP, SMA, sampai SBMPTN'
			]

		];
		return view('faq', $data);
	}
}
