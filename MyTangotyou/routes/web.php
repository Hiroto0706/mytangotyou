    <?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WordController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [WordController::class, 'word'])
        ->name('words.view');

Route::get('/words', [WordController::class, 'list'])
        ->name('words.list');
Route::get('/words/{word}', [WordController::class, 'show'])
        ->name('words.show')
        ->where('word', '[0-9]+');

Route::get('/words/create', [WordController::class, 'create'])
        ->name('words.create');
Route::post('/words/store', [WordController::class, 'store'])
        ->name('words.store');

Route::get('/words/{word}/edit', [WordController::class, 'edit'])
        ->name('words.edit')
        ->where('word', '[0-9]+');
Route::patch('/words/{word}/update', [WordController::class, 'update'])
        ->name('words.update')
        ->where('word', '[0-9]+');

Route::delete('/words/{word}/delete', [WordController::class, 'destroy'])
        ->name('words.destroy')
        ->where('word', '[0-9]+');
