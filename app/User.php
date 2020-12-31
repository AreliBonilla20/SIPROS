<?php

namespace App;

use Caffeinated\Shinobi\Traits\ShinobiTrait;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use DB;
use Crypt;

class User extends Authenticatable
{
    use Notifiable, ShinobiTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function id_rol(){

        $rol_usuario    = DB::table('role_user')
                        ->select('role_id as id_rol')
                        ->where('role_user.user_id',$this->id)
                        ->get();

        return $rol_usuario->pluck('id_rol')->first();
    }

    public function nombre_rol(){

        $nombre_rol    = DB::table('role_user')
                        ->join('roles','role_user.role_id','=','roles.id')
                        ->select('roles.name as nombre')
                        ->where('role_user.user_id',$this->id)
                        ->get();

        return $nombre_rol->pluck('nombre')->first();
    }

    public function password_decrypt(){
        return Crypt::decrypt($this->password);
    }
}
