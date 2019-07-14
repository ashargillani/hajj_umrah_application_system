<?php

namespace App\Http\Controllers;

use App\Http\Requests\UploadMessageAndAttachmentsRequest;
use App\MessageAttachments;
use App\ProviderMessages;
use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\Storage;

class ProviderMessagesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $messages = ProviderMessages::all();

        return view('provider.messages.index', [
            'messages' => $messages
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('provider.messages.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(UploadMessageAndAttachmentsRequest $request)
    {
        $providerMessage = new ProviderMessages();
        $providerMessage->subject = $request->subject;
        $providerMessage->body = $request->body;
        $providerMessage->save();
        foreach ($request->attachments as $attachment) {
            $extension = $attachment->getClientOriginalExtension();
            $fileName = pathinfo($attachment->getClientOriginalName(), PATHINFO_FILENAME) .
                                '_' .
                                Carbon::now()->timestamp .
                                '.' .
                                $extension;
            $attachment->move(
                public_path('provider_message_attachments/'),
                $fileName
            );

            $messageAttachment = new MessageAttachments();
            $messageAttachment->filename = $fileName;
            $messageAttachment->message()->associate($providerMessage);
            $messageAttachment->save();
        }

        return redirect()->route('message.index')->with('success', 'Message Sent !');
    }


    /**
     * Display the specified resource.
     *
     * @param  \App\ProviderMessages  $message
     * @return \Illuminate\Http\Response
     */
    public function show(ProviderMessages $message)
    {
        return view('provider.messages.show', [
            'message' => $message
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\ProviderMessages  $providerMessages
     * @return \Illuminate\Http\Response
     */
    public function edit(ProviderMessages $providerMessages)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\ProviderMessages  $providerMessages
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, ProviderMessages $providerMessages)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\ProviderMessages  $message
     * @return \Illuminate\Http\Response
     */
    public function destroy(ProviderMessages $message)
    {
        $message->delete();

        return redirect()->route('message.index')->with('success', 'Message Deleted !');
    }
}
