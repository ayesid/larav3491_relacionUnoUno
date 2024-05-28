<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Route;


Route::get('cursos/listar',[CursoController::class,'listar'])->name('curso.listar');
Route::get('curso/create',[CursoController::class,'create']);
Route::post('curso/store', [CursoController::class,'store'])->name('curso.store');
Route::get('curso/{curso}',[CursoController::class,'show'])->name('curso.show');
Route::put('curso/{curso}',[CursoController::class,'update'])->name('curso.update');
Route::delete('curso/{curso}',[CursoController::class,'destroy'])->name('curso.destroy');
Route::get('curso/{curso}/editar',[CursoController::class,'edit'])->name('curso.edit');

Route::get('usuario/asociar_rol',[RoleUserController::class,'asociar']);
Route::post('usuario/asociar_rol/storeusuario/asociar_rol/store',[RoleUserController::class,'store'])->name('role_user.store');
?>