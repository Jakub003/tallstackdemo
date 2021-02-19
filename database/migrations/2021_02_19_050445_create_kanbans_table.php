<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKanbansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('kanban_projects', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id');
            $table->string('project_name');
            $table->integer('order');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create('kanban_project_columns', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kanban_project_id');
            $table->string('column_name');
            $table->string('column_color');
            $table->string('column_order');
            $table->timestamps();
        });

        Schema::create('kanban_project_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kanban_project_id');
            $table->string('tag_name');
            $table->string('tag_color');
            $table->string('tag_icon');
            $table->string('tag_order');
            $table->timestamps();
        });

        Schema::create('kanban_project_users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kanban_project_id');
            $table->foreignId('user_id');
            $table->timestamps();
        });

        Schema::create('kanban_project_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kanban_project_id');
            $table->foreignId('user_id');
            $table->string('message');
            $table->timestamps();
        });


        Schema::create('kanban_tasks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kanban_project_id');
            $table->foreignId('kanban_project_tag_id');
            $table->string('task_title');
            $table->integer('task_author');
            $table->integer('task_order');
            $table->integer('task_column');
            $table->integer('priority');
            $table->integer('status');
            $table->timestamps();
        });

        Schema::create('kanban_task_tags', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kanban_task_id');
            $table->string('tag_name');
            $table->string('tag_color');
            $table->string('tag_order');
            $table->timestamps();
        });

        Schema::create('kanban_task_messages', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kanban_task_id');
            $table->integer('message_author');
            $table->integer('message_type');
            $table->integer('message_reply_id');
            $table->string('message');
            $table->timestamps();
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('kanban_projects');
        Schema::dropIfExists('kanban_project_columns');
        Schema::dropIfExists('kanban_project_tags');
        Schema::dropIfExists('kanban_project_users');
        Schema::dropIfExists('kanban_project_messages');
        Schema::dropIfExists('kanban_tasks');
        Schema::dropIfExists('kanban_task_tags');
        Schema::dropIfExists('kanban_task_messages');

    }
}
