<?php

use App\Models\Card;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Query\Expression;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use PhpParser\Node\Stmt\Expression as StmtExpression;

class CreateCommentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('comments', function (Blueprint $table) {
            $table->id();
            $table->timestamp('created_at')
                ->default(new Expression('CURRENT_TIMESTAMP'));
            $table->foreignId('card_id')->constrained('cards');
            $table->text('comment_text')
                ->comment('текст комментария');
            $table->integer('card_likes')
                ->default(0)
                ->comment('количество лайков');
            $table->integer('card_dislikes')
                ->default(0)
                ->comment('количество дизлайков');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('comments');
    }
}
