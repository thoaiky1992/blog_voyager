<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

use Mail;
use App\Mail\testMail;
use App\Models\Voyager\Post;
use App\Models\Subscribe;

class SendMail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */

    protected $post;
	
    protected $list;

    public function __construct($post)
    {
        $this->post = $post;
        $this->list = Subscribe::all()->pluck('email');
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new testMail($this->post);
        Mail::to($this->list)->send($email);
    }
}
