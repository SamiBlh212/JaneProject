<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Exception;
use Illuminate\Support\Facades\Log;

class TestResultMail extends Mailable
{
    use Queueable, SerializesModels;

    public $result;

    /**
     * Crée une nouvelle instance.
     *
     * @param mixed $result
     */
    public function __construct($result)
    {
        $this->result = $result;
    }

    public function build()
    {
        try {
            return $this->subject('Votre résultat de test - Jane Orientation')
                        ->view('emails.test-result');
        } catch (Exception $e) {
            Log::error('Erreur lors de la construction de TestResultMail : ' . $e->getMessage());
            throw $e;
        }
    }

}
