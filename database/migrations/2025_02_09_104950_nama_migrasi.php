<?php
    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Support\Facades\Schema;
    
    return new class extends Migration {
        public function up()
        {
            Schema::table('users', function (Blueprint $table) {
                $table->string('address')->nullable()->after('email'); // Menambahkan alamat setelah email
                $table->string('phone')->nullable()->after('address'); // Menambahkan telepon setelah alamat
            });
        }
    
        public function down()
        {
            Schema::table('users', function (Blueprint $table) {
                $table->dropColumn(['address', 'phone']); // Menghapus kolom jika rollback
            });
        }
    };
    
