<?php
namespace Umangp\Inspire\Providers;
use Illuminate\Support\ServiceProvider;
class InspirationProvider extends ServiceProvider{
    public function boot(){
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');
        $this->loadViewsFrom(__DIR__.'/../views', 'inspire');
    }
}
