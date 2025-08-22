<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreUserRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $rules = [
            'nama' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:6|confirmed',
            'role' => 'required|in:admin,peserta',
        ];

        // jika role = peserta, wajib isi semua
        if ($this->input('role') === 'peserta') {
            $rules = array_merge($rules, [
                'nik' => 'required|string|max:20|unique:users,nik',
                'warga_negara' => 'required|in:WNI,WNA',
                'jenis_kelamin' => 'required|in:L,P',
                'tempat_lahir' => 'required|string|max:100',
                'tanggal_lahir' => 'required|date',
                'alamat' => 'required|string',
                'alamat_provinsi' => 'required|string|max:100',
                'alamat_kabupaten' => 'required|string|max:100',
                'alamat_kecamatan' => 'required|string|max:100',
                'agama' => 'required|string|max:50',
                'no_wa' => 'required|string|max:20',
                'wa_sender' => 'required|string|max:20',
                'nama_foto' => 'required|string|max:255',
                'pendidikan_terakhir' => 'required|in:SD,SMP,SMA,D3,S1,S2,S3',
                'ijazah' => 'required|string|max:255',
            ]);
        }

        return $rules;
    }
}
