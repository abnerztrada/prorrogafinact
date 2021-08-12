<?php
namespace tool_prorrogafin\task;

use tool_prorrogafin\models\correo;
// use tool_recordatorio\models\report;
class prorrogafin extends \core\task\scheduled_task
{
    /**
     * return name of task for admin panel.
     *
     * @return string name
     */
    public function get_name()
    {
        return get_string('cronenroll', 'tool_prorrogafin');
    }

    /**
     * method to execute by cron task.
     */
    public function execute()
    {
      // mtrace("Hola mundo");
      global $CFG;
      $correo_envio = new correo();
      $correo_envio->correo_envio();
    }
}
