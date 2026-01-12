<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    /** @use HasFactory<\Database\Factories\UserFactory> */
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */

    //é oq pode ser preenchido em massa
    //qualquer outro campo que nao esteja aqui nao podera ser preenchido em massa
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var list<string>
     */

    //esconde esses campos quando o objeto for convertido para array ou json
    //util para esconder senha e para apis
    protected $hidden = [
        'password',

    ];

    /**
     * Get the attributes that should be cast.
     *
     * @return array<string, string>
     */


    //converte automaticamente o campo password para hash quando for atribuido
    //isso é util para nao esquecer de hashear a senha
    protected function casts(): array
    {
        return [

            'password' => 'hashed',
        ];
    }
}
