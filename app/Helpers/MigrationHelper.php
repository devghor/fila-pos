<?php

namespace App\Helpers;

class MigrationHelper
{
    public static function addUlidColumn($table, string $columnName = 'ulid')
    {
        $table->ulid($columnName)->unique();
    }

    public static function addUserTrackingColumns($table)
    {
        $table->foreignId('created_by')->nullable();
        $table->foreignId('updated_by')->nullable();
        $table->foreignId('deleted_by')->nullable();
    }

    public static function addTeamColumn($table)
    {
        $table->foreignId('team_id')->constrained('teams')->onDelete('cascade');
    }
}
