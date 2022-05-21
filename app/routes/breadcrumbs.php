<?php
// Home
Breadcrumbs::for('home', function ($trail) {
    $trail->push('Home', route('home'));
});

Breadcrumbs::for('add', function ($trail) {
    $trail->push('新規作成', route('add'));
});