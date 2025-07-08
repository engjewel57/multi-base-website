<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use App\Http\Traits\AuditColumnTrait;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Admin;
use App\Models\User;

return new class extends Migration
{
    use AuditColumnTrait, SoftDeletes;

    public function up(): void
    {
        Schema::create('admins', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('image')->nullable();
            $table->tinyInteger('status')->default(1)->comment(User::STATUS_ACTIVE . ' = Active, ' . User::STATUS_INACTIVE . ' = Inactive, ' . User::STATUS_PENDING . ' = Pending' );
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
            $table->softDeletes();

            // Call the trait method
            $this->addAdminAuditColumns($table);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('admins');
    }
};
