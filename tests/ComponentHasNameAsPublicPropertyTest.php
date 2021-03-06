<?php

namespace Tests;

use Livewire\Component;
use Livewire\LivewireManager;

class ComponentHasNameAsPublicPropertyTest extends TestCase
{
    /** @test */
    public function public_id_property_is_set()
    {
        $component = app(LivewireManager::class)->test(ComponentWithNameProperty::class);

        $component->set('name', 'Caleb');

        $this->assertEquals($component->name, 'Caleb');
    }
}

class ComponentWithNameProperty extends Component
{
    public $name;

    public function render()
    {
        return view('null-view');
    }
}
