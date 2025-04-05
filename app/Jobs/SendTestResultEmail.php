<?php

namespace App\Jobs;

use App\Mail\TestResultMail;
use Illuminate\Bus\Queueable;
use Illuminate\Support\Facades\Mail;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Exception;
use Illuminate\Support\Facades\Log;


class SendTestResultEmail implements ShouldQueue
{
    use InteractsWithQueue, Queueable, SerializesModels;

    protected $email;
    protected $result;

    /**
     * Crée une nouvelle instance du job.
     *
     * @param string $email
     * @param mixed $result
     */
    public function __construct($email, $result)
    {
        $this->email = $email;
        $this->result = $result;
    }

    /**
     * Exécute le job.
     */
    public function handle()
    {
        try {
            Mail::to($this->email)->send(new TestResultMail($this->result));
            Log::info("Jobs/SendTestResultEmail : d'email dispatché pour : " . $this->email);
        } catch (Exception $e) {
            Log::error("Jobs/SendTestResultEmail : Erreur lors du dispatch du job email : " . $e->getMessage());
        }
    }
}
