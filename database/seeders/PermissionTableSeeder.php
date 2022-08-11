<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\PermissionRole;
use App\Models\User;
use App\Models\Role;

class PermissionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $permission_ids = [];
        $permissions = [
            ['code' => 'M001', 'name' => '[Master] - Divisi', 'readable' => true, 'createable' => true, 'updateable' => true, 'deleteable' => true],
            ['code' => 'M002', 'name' => '[Master] - Pegawai', 'readable' => true, 'createable' => true, 'updateable' => true, 'deleteable' => true],
            ['code' => 'M003', 'name' => '[Master] - Kategori Cuti/Izin', 'readable' => true, 'createable' => true, 'updateable' => true, 'deleteable' => true],
            ['code' => 'M004', 'name' => '[Transaction] - Transaksi Cuti/Izin', 'readable' => true, 'createable' => false, 'updateable' => false, 'deleteable' => false],
            ['code' => 'M005', 'name' => '[Transaction] - Transaksi Lembur', 'readable' => true, 'createable' => false, 'updateable' => false, 'deleteable' => false],
            ['code' => 'M006', 'name' => '[Import] - Import Absensi', 'readable' => true, 'createable' => true, 'updateable' => false, 'deleteable' => true],
            ['code' => 'M007', 'name' => '[CMS] - Slider', 'readable' => true, 'createable' => true, 'updateable' => true, 'deleteable' => true],
            ['code' => 'M008', 'name' => '[User Config] - Account Pegawai', 'readable' => true, 'createable' => false, 'updateable' => true, 'deleteable' => false],
            ['code' => 'M009', 'name' => '[User Config] - Role', 'readable' => true, 'createable' => true, 'updateable' => true, 'deleteable' => true],
            ['code' => 'M010', 'name' => '[User Config] - User Admin', 'readable' => true, 'createable' => true, 'updateable' => true, 'deleteable' => true],
            ['code' => 'M011', 'name' => '[Report] - Report Cuti/Izin', 'readable' => true, 'createable' => false, 'updateable' => false, 'deleteable' => false],
            ['code' => 'M012', 'name' => '[Report] - Report Lembur', 'readable' => true, 'createable' => false, 'updateable' => false, 'deleteable' => false],
            ['code' => 'M013', 'name' => '[Report] - Report Fee', 'readable' => true, 'createable' => false, 'updateable' => false, 'deleteable' => false],
        ];

        // update or insert permissions
        foreach ($permissions as $permission) {
            DB::table('permissions')->updateOrInsert($permission);
        }
        // get data permissions
        $data = DB::table('permissions')->get();
        // insert id permission to $permission_ids
        foreach ($data as $d) {
            $permission_ids[] = $d->id;
            $read[] = $d->readable;
            $create[] = $d->createable;
            $update[] = $d->updateable;
            $delete[] = $d->deleteable;
        }

        // find super admin role
        $admin_role = Role::where('name', 'super-admin')->first();

        // synchronize permissions to admin role
        $admin_role->permissions()->sync($permission_ids);
        $permission_role = PermissionRole::where('role_id', $admin_role->id)->get();
        foreach ($permission_role as $key => $value) {
            $value->read_right = $read[$key];
            $value->create_right = $create[$key];
            $value->update_right = $update[$key];
            $value->delete_right = $delete[$key];
            $value->update();
        }

        $admin = User::find($admin_role->id);
        $admin->roles()->attach($admin_role->id);
    }
}
