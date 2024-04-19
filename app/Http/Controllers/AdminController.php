<?php

namespace App\Http\Controllers;

use App\Models\JnsAnggota;
use App\Models\JnsBelanja;
use App\Models\JnsSimpanan;
use App\Models\Role;
use App\Models\Unit;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AdminController extends Controller
{
    public function index()
    {
        return view('dashboard.admin.index');
    }


    //===== MASTER UNIT
    public function masterUnit()
    {
        $units = Unit::all();
        return view('dashboard.admin.master.unit', compact('units'));
    }

    public function unitKerjaAddDo(Request $request)
    {

        if (!$request->nama_unit_edit) {
            $request->session()->flash('message', 'Nama Unit Kerja Tidak Boleh Kosong');
            $request->session()->flash('color', 'danger');
            $request->session()->flash('icon', 'close-circle-o');
            return redirect()->route('admin.master.unit');
        }

        $units = Unit::all();
        $lastId = 0;
        foreach ($units as $u) {
            $currentId = $u->id;
            // Check if there's a gap in the sequence
            if ($currentId != $lastId + 1) {
                // Found a gap, so set the missing ID
                $missingId = $lastId + 1;
                break; // Exit the loop after finding the first gap
            }
            // Update the last ID
            $lastId = $currentId;
        }
        $idNew = $lastId + 1;

        $unit = new Unit();
        $unit->id = $idNew;
        $unit->nama_unit = $request->nama_unit;
        $unit->status = 0;
        $unit->save();
        $request->session()->flash('message', 'Berhasil Menambahkan Data!');
        $request->session()->flash('color', 'success');
        $request->session()->flash('icon', 'check-circle');
        return redirect()->route('admin.master.unit');
    }

    public function unitKerjaEditDo(Request $request, $id)
    {
        $unit = Unit::findOrFail($id);

        if (!$request->nama_unit_edit) {
            $request->session()->flash('message', 'Nama Unit Kerja Tidak Boleh Kosong');
            $request->session()->flash('color', 'danger');
            $request->session()->flash('icon', 'close-circle-o');
            return redirect()->route('admin.master.unit');
        } else {
            $unit->update([
                'nama_unit' => $request->nama_unit_edit
            ]);
            $request->session()->flash('message', 'Berhasil Mengubah Data!');
            $request->session()->flash('color', 'success');
            $request->session()->flash('icon', 'check-circle');
            return redirect()->route('admin.master.unit');
        }
    }

    public function unitKerjaDeleteDo($id)
    {
        Unit::destroy($id);
        session()->flash('message', 'Berhasil Menghapus Data!');
        session()->flash('color', 'success');
        session()->flash('icon', 'check-circle');
        return redirect()->route('admin.master.unit');
    }


    // ==== MASTER ROLE
    public function masterRole()
    {
        $roles = Role::all();
        return view('dashboard.admin.master.role', compact('roles'));
    }

    public function roleAddDo(Request $request)
    {
        if (!$request->nama_role) {
            $request->session()->flash('message', 'Nama Role Tidak Boleh Kosong');
            $request->session()->flash('color', 'danger');
            $request->session()->flash('icon', 'close-circle-o');
            return redirect()->route('admin.master.role');
        }

        $roles = Role::all();
        $lastId = 0;
        foreach ($roles as $r) {
            $currentId = $r->id;
            // Check if there's a gap in the sequence
            if ($currentId != $lastId + 1) {
                // Found a gap, so set the missing ID
                $missingId = $lastId + 1;
                break; // Exit the loop after finding the first gap
            }
            // Update the last ID
            $lastId = $currentId;
        }
        $idNew = $lastId + 1;

        $role = new Role();
        $role->id = $idNew;
        $role->nama_role = $request->nama_role;
        $role->status = 0;
        $role->save();
        $request->session()->flash('message', 'Berhasil Menambahkan Data!');
        $request->session()->flash('color', 'success');
        $request->session()->flash('icon', 'check-circle');
        return redirect()->route('admin.master.role');
    }

    public function roleEditDo(Request $request, $id)
    {
        $role = Role::findOrFail($id);

        if (!$request->nama_role) {
            $request->session()->flash('message', 'Nama Role Tidak Boleh Kosong');
            $request->session()->flash('color', 'danger');
            $request->session()->flash('icon', 'close-circle-o');
            return redirect()->route('admin.master.role');
        } else {
            $role->update([
                'nama_role' => $request->nama_role
            ]);
            $request->session()->flash('message', 'Berhasil Mengubah Data!');
            $request->session()->flash('color', 'success');
            $request->session()->flash('icon', 'check-circle');
            return redirect()->route('admin.master.role');
        }
    }

    public function roleDeleteDo($id)
    {
        Role::destroy($id);
        session()->flash('message', 'Berhasil Menghapus Data!');
        session()->flash('color', 'success');
        session()->flash('icon', 'check-circle');
        return redirect()->route('admin.master.role');
    }


    // ==== MASTER JENIS ANGGOTA
    public function masterJnsAnggota()
    {
        $jnsAnggotas = JnsAnggota::all();
        return view('dashboard.admin.master.jenis_anggota', compact('jnsAnggotas'));
    }

    public function jnsAnggotaAddDo(Request $request)
    {
        if (!$request->jenis_anggota) {
            $request->session()->flash('message', 'Jenis Anggota Tidak Boleh Kosong');
            $request->session()->flash('color', 'danger');
            $request->session()->flash('icon', 'close-circle-o');
            return redirect()->route('admin.master.jenis_anggota');
        }

        $jnsAnggotas = JnsAnggota::all();
        $lastId = 0;
        foreach ($jnsAnggotas as $ja) {
            $currentId = $ja->id;
            // Check if there's a gap in the sequence
            if ($currentId != $lastId + 1) {
                // Found a gap, so set the missing ID
                $missingId = $lastId + 1;
                break; // Exit the loop after finding the first gap
            }
            // Update the last ID
            $lastId = $currentId;
        }
        $idNew = $lastId + 1;

        $jnsAnggota = new JnsAnggota();
        $jnsAnggota->id = $idNew;
        $jnsAnggota->jenis_anggota = $request->jenis_anggota;
        $jnsAnggota->status = 0;
        $jnsAnggota->save();
        $request->session()->flash('message', 'Berhasil Menambahkan Data!');
        $request->session()->flash('color', 'success');
        $request->session()->flash('icon', 'check-circle');
        return redirect()->route('admin.master.jenis_anggota');
    }

    public function jnsAnggotaEditDo(Request $request, $id)
    {
        $jnsAnggota = JnsAnggota::findOrFail($id);

        if (!$request->jenis_anggota) {
            $request->session()->flash('message', 'Jenis Anggota Tidak Boleh Kosong');
            $request->session()->flash('color', 'danger');
            $request->session()->flash('icon', 'close-circle-o');
            return redirect()->route('admin.master.jenis_anggota');
        } else {
            $jnsAnggota->update([
                'jenis_anggota' => $request->jenis_anggota
            ]);
            $request->session()->flash('message', 'Berhasil Mengubah Data!');
            $request->session()->flash('color', 'success');
            $request->session()->flash('icon', 'check-circle');
            return redirect()->route('admin.master.jenis_anggota');
        }
    }

    public function jnsAnggotaDeleteDo($id)
    {
        JnsAnggota::destroy($id);
        session()->flash('message', 'Berhasil Menghapus Data!');
        session()->flash('color', 'success');
        session()->flash('icon', 'check-circle');
        return redirect()->route('admin.master.jenis_anggota');
    }


    // ==== MASTER JENIS BELANJA
    public function masterJnsBelanja()
    {
        $jnsBelanjas = JnsBelanja::all();
        return view('dashboard.admin.master.jenis_belanja', compact('jnsBelanjas'));
    }

    public function jnsBelanjaAddDo(Request $request)
    {
        if (!$request->jenis_belanja) {
            $request->session()->flash('message', 'Jenis Belanja Tidak Boleh Kosong');
            $request->session()->flash('color', 'danger');
            $request->session()->flash('icon', 'close-circle-o');
            return redirect()->route('admin.master.jenis_belanja');
        }

        $jnsBelanjas = JnsBelanja::all();
        $lastId = 0;
        foreach ($jnsBelanjas as $jb) {
            $currentId = $jb->id;
            // Check if there's a gap in the sequence
            if ($currentId != $lastId + 1) {
                // Found a gap, so set the missing ID
                $missingId = $lastId + 1;
                break; // Exit the loop after finding the first gap
            }
            // Update the last ID
            $lastId = $currentId;
        }
        $idNew = $lastId + 1;

        $jnsBelanja = new JnsBelanja();
        $jnsBelanja->id = $idNew;
        $jnsBelanja->jenis_belanja = $request->jenis_belanja;
        $jnsBelanja->status = 0;
        $jnsBelanja->save();
        $request->session()->flash('message', 'Berhasil Menambahkan Data!');
        $request->session()->flash('color', 'success');
        $request->session()->flash('icon', 'check-circle');
        return redirect()->route('admin.master.jenis_belanja');
    }

    public function jnsBelanjaEditDo(Request $request, $id)
    {
        $jnsBelanja = JnsBelanja::findOrFail($id);

        if (!$request->jenis_belanja) {
            $request->session()->flash('message', 'Jenis Belanja Tidak Boleh Kosong');
            $request->session()->flash('color', 'danger');
            $request->session()->flash('icon', 'close-circle-o');
            return redirect()->route('admin.master.jenis_belanja');
        } else {
            $jnsBelanja->update([
                'jenis_belanja' => $request->jenis_belanja
            ]);
            $request->session()->flash('message', 'Berhasil Mengubah Data!');
            $request->session()->flash('color', 'success');
            $request->session()->flash('icon', 'check-circle');
            return redirect()->route('admin.master.jenis_belanja');
        }
    }

    public function jnsBelanjaDeleteDo($id)
    {
        JnsBelanja::destroy($id);
        session()->flash('message', 'Berhasil Menghapus Data!');
        session()->flash('color', 'success');
        session()->flash('icon', 'check-circle');
        return redirect()->route('admin.master.jenis_belanja');
    }


    // ==== MASTER JENIS SIMPANAN
    public function masterJnsSimpanan()
    {
        $jnsSimpanans = JnsSimpanan::all();
        return view('dashboard.admin.master.jenis_simpanan', compact('jnsSimpanans'));
    }

    public function jnsSimpananAddDo(Request $request)
    {
        if (!$request->jenis_simpanan) {
            $request->session()->flash('message', 'Jenis Simpanan Tidak Boleh Kosong');
            $request->session()->flash('color', 'danger');
            $request->session()->flash('icon', 'close-circle-o');
            return redirect()->route('admin.master.jenis_simpanan');
        }

        $jnsSimpanans = JnsSimpanan::all();
        $lastId = 0;
        foreach ($jnsSimpanans as $js) {
            $currentId = $js->id;
            // Check if there's a gap in the sequence
            if ($currentId != $lastId + 1) {
                // Found a gap, so set the missing ID
                $missingId = $lastId + 1;
                break; // Exit the loop after finding the first gap
            }
            // Update the last ID
            $lastId = $currentId;
        }
        $idNew = $lastId + 1;

        $jnsSimpanan = new JnsSimpanan();
        $jnsSimpanan->id = $idNew;
        $jnsSimpanan->jenis_simpanan = $request->jenis_simpanan;
        $jnsSimpanan->status = 0;
        $jnsSimpanan->save();
        $request->session()->flash('message', 'Berhasil Menambahkan Data!');
        $request->session()->flash('color', 'success');
        $request->session()->flash('icon', 'check-circle');
        return redirect()->route('admin.master.jenis_simpanan');
    }

    public function jnsSimpananEditDo(Request $request, $id)
    {
        $jnsSimpanan = JnsSimpanan::findOrFail($id);

        if (!$request->jenis_simpanan) {
            $request->session()->flash('message', 'Jenis Simpanan Tidak Boleh Kosong');
            $request->session()->flash('color', 'danger');
            $request->session()->flash('icon', 'close-circle-o');
            return redirect()->route('admin.master.jenis_simpanan');
        } else {
            $jnsSimpanan->update([
                'jenis_simpanan' => $request->jenis_simpanan
            ]);
            $request->session()->flash('message', 'Berhasil Mengubah Data!');
            $request->session()->flash('color', 'success');
            $request->session()->flash('icon', 'check-circle');
            return redirect()->route('admin.master.jenis_simpanan');
        }
    }

    public function jnsSimpananDeleteDo($id)
    {
        JnsSimpanan::destroy($id);
        session()->flash('message', 'Berhasil Menghapus Data!');
        session()->flash('color', 'success');
        session()->flash('icon', 'check-circle');
        return redirect()->route('admin.master.jenis_simpanan');
    }


    // ================================ CMS CONTROLLER ====================================




}
