<?php

namespace App\Models;

// use Illuminate\Contracts\Auth\MustVerifyEmail;
use Database\Factories\UsuarioFactory;
use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Attributes\Hidden;
use Illuminate\Database\Eloquent\Attributes\Table;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

#[Fillable(['nome', 'email', 'celular', 'senha'])]
#[Hidden(['senha'])]
#[Table('usuarios')]
#[HasFactory(UsuarioFactory::class)]
class Usuario extends Model
{
    /** @use HasFactory<UserFactory> */
    use HasFactory, Notifiable;

}
