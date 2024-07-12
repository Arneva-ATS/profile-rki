<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class PengajuanController extends Controller
{
    public function store(Request $request)
    {
        $messageErrors = [
            'nama_koperasi.required'        => 'Nama koperasi harus diisi.',
            'nama_koperasi.string'          => 'Nama koperasi harus berupa teks.',
            'nama_koperasi.max'             => 'Nama koperasi maksimal 100 karakter.',
            'email_koperasi.required'       => 'Email koperasi harus diisi.',
            'email_koperasi.email'          => 'Format email tidak valid.',
            'email_koperasi.max'            => 'Email koperasi maksimal 100 karakter.',
            'nama_ketua.required'           => 'Nama ketua harus diisi.',
            'nama_ketua.string'             => 'Nama ketua harus berupa teks.',
            'nama_ketua.max'                => 'Nama ketua maksimal 100 karakter.',
            'nomer_ketua.required'          => 'Nomer ketua harus diisi.',
            'nomer_ketua.string'            => 'Nomer ketua harus berupa teks.',
            'nomer_ketua.regex'             => 'Format nomer ketua tidak valid.',
            'tingkatan_koperasi.required'   => 'Tingkatan koperasi harus diisi.',
            'tingkatan_koperasi.string'     => 'Tingkatan koperasi harus berupa teks.',
            'tingkatan_koperasi.in'         => 'Tingkatan koperasi tidak valid.',
        ];


        $validator = Validator::make($request->all(), [
            'nama_koperasi'      => 'required|string|max:100',
            'email_koperasi'     => 'required|email|max:100',
            'nama_ketua'         => 'required|string|max:100',
            'nomer_ketua'        => ['required', 'string', 'regex:/^(08|\+628)[0-9]{8,11}$/'],
            'tingkatan_koperasi' => 'required|string|in:INKOP,PUSKOP,PRIMKOP',
        ], $messageErrors);

        // Validation Check
        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 400);
        }

        try {
            DB::table('tbl_pengajuan')->insert([
                'nama_koperasi'      => $request->nama_koperasi,
                'email_koperasi'     => $request->email_koperasi,
                'nama_ketua'         => $request->nama_ketua,
                'nomer_ketua'        => $request->nomer_ketua,
                'tingkat_koperasi'   => $request->tingkatan_koperasi,
            ]);

            return response()->json(['message' => 'Pengajuan berhasil disimpan'], 201);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Terjadi kesalahan saat menyimpan pengajuan', 'details' => $e->getMessage()], 500);
        }
    }
}
