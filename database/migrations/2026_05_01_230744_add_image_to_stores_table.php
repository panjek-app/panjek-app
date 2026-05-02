public function up()
{
    Schema::table('stores', function (Blueprint $table) {
        $table->string('image')->nullable();
    });
}
