<?php


namespace nixar59\db;


class Migration extends \yii\db\Migration
{
    public $depends_on = [];

    const EVENT_BEFORE_UP = 'before_up';
    const EVENT_AFTER_UP = 'after_up';
    const EVENT_BEFORE_DOWN = 'before_down';
    const EVENT_AFTER_DOWN = 'after_down';

    public function init()
    {
        $this->on(static::EVENT_BEFORE_UP, [$this, 'beforeUp']);
        $this->on(static::EVENT_AFTER_UP, [$this, 'afterUp']);
        $this->on(static::EVENT_BEFORE_DOWN, [$this, 'beforeDown']);
        $this->on(static::EVENT_AFTER_DOWN, [$this, 'afterDown']);
        parent::init();
    }

    public function up()
    {
        $this->trigger(static::EVENT_BEFORE_UP);
        $result = parent::up();
        $this->trigger(static::EVENT_AFTER_UP);
        return $result;
    }

    public function down()
    {
        $this->trigger(static::EVENT_BEFORE_DOWN);
        $result = parent::down();
        $this->trigger(static::EVENT_AFTER_DOWN);
        return $result;
    }

    public function beforeUp($event)
    {

    }

    public function afterUp($event)
    {

    }

    public function beforeDown($event)
    {

    }

    public function afterDown($event)
    {

    }
}