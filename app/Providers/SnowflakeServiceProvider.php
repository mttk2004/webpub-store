<?php

namespace App\Providers;


use Godruoyi\Snowflake\Snowflake;
use Illuminate\Support\ServiceProvider;


class SnowflakeServiceProvider extends ServiceProvider
{
	public function register(): void
	{
		$this->app->singleton('snowflake', function () {
			$config = config('snowflake');
			
			return new Snowflake($config['machine_id'], $config['sequence'], $config['start_time']);
		});
	}
	
	public function boot(): void {}
}
