<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Chat;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Events\MessageSent;

use App\Models\AskiraChat;
use App\Models\BayoChat;
use App\Models\BiuChat;
use App\Models\ChibokChat;
use App\Models\DamboaChat;
use App\Models\GwozaChat;
use App\Models\HawulChat;
use App\Models\KwayaKusarChat;
use App\Models\ShaniChat;

class ChatController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generalIndex()
    {
        if (auth()->user()->local_government == 'Askira/Uba') {
            # code...
            $askirachats = AskiraChat::all();
            return view('pages.chat.askira', compact('askirachats'));
        } elseif (auth()->user()->local_government == 'Bayo') {
            # code...
            $bayochats = BayoChat::all();
            return view('pages.chat.bayo', compact('bayochats'));
        } elseif (auth()->user()->local_government == 'Biu') {
            # code...
            $biuchats = BiuChat::all();
            return view('pages.chat.biu', compact('biuchats'));
        } elseif (auth()->user()->local_government == 'Chibok') {
            # code...
            $chibokchats =ChibokChat::all();
            return view('pages.chat.chibok', compact('chibokchats'));
        } elseif (auth()->user()->local_government == 'Damboa') {
            # code...
            $damboachats = DamboaChat::all();
            return view('pages.chat.damboa', compact('damboachats'));
        } elseif (auth()->user()->local_government == 'Gwoza') {
            # code...
            $gwozachats = GwozaChat::all();
            return view('pages.chat.gwoza', compact('gwozachats'));
        } elseif (auth()->user()->local_government == 'Hawul') {
            # code...
            $hawulchats = HawulChat::all();
            return view('pages.chat.hawul', compact('hawulchats'));
        } elseif (auth()->user()->local_government == 'Kwaya Kusar') {
            # code...
            $kwayachats = KwayaKusarChat::all();
            return view('pages.chat.kwaya', compact('kwayachats'));
        } elseif (auth()->user()->local_government == 'Shani') {
            # code...
            $shanichats = ShaniChat::all();
            return view('pages.chat.shani', compact('shanichats'));
        } else {
            # code...
            return view('pages.chat.general');
        }
    }

    /**
     * Fetch all messages
     *
     * @return Chat
     */
    public function fetchMessages()
    {
        return Chat::with('user')->get();
    }

    /**
     * Persist message to database
     *
     * @param  Request $request
     * @return Response
     */
    public function sendMessage(Request $request)
    {
        // $user = Auth::user();

        // $chat = $user->chats()->create([
        //     'message' => $request->input('message')
        // ]);

        // broadcast(new MessageSent($user, $chat))->toOthers();

        // return ['status' => 'Message Sent!'];

        $chat = new Chat;
        $chat->message = $request->message;
        $chat->user()->associate($request->user());
        $user = User::find($request->lga);
        $user->chats()->save($chat);

        broadcast(new MessageSent($user, $chat))->toOthers();

        return ['status' => 'Message Sent!'];

        // $review = new Review;
        // $review->review = $request->review;
        // $review->user()->associate($request->user());
        // $review->save();
        // return back();
    }

    /**
     * Store the message into the database
     * 
     * @param Request $request
     */
    public function sendChat(Request $request)
    {
        if ($request->hasFile('message')) {
            $message = $request->file('message');
            $input['message'] = time().'.'.$message->extension();

            $destinationMessageImage = 'images/messages';

            //-------------[ Resize Image ]------------
            $img = Image::make($message->path());
            $img->resize(200, 200, function ($constraint) {})->save($destinationMessageImage.'/'.$input['message']);
        }

        if (auth()->user()->local_government == 'Askira/Uba') {
            # code...
            $askirachat = new AskiraChat;
            $askirachat->message = $request->message;
            if (($request->hasFile('message'))) {
                $askirachat->message = $input['message'];
            }
            $askirachat->user()->associate($request->user());
            $askirachat->save();
            return back();
        } elseif (auth()->user()->local_government == 'Bayo') {
            # code...
            $bayochat = new BayoChat;
            $bayochat->message = $request->message;
            $bayochat->user()->associate($request->user());
            $bayochat->save();
            return back();
        } elseif (auth()->user()->local_government == 'Biu') {
            # code...
            $biuchat = new BiuChat;
            $biuchat->message = $request->message;
            $biuchat->user()->associate($request->user());
            $biuchat->save();
            return back();
        } elseif (auth()->user()->local_government == 'Chibok') {
            # code...
            $chibokchat = new ChibokChat;
            $chibokchat->message = $request->message;
            $chibokchat->user()->associate($request->user());
            $chibokchat->save();
            return back();
        } elseif (auth()->user()->local_government == 'Damboa') {
            # code...
            $damboachat = new DamboaChat;
            $damboachat->message = $request->message;
            $damboachat->user()->associate($request->user());
            $damboachat->save();
            return back();
        } elseif (auth()->user()->local_government == 'Gwoza') {
            # code...
            $gwozachat = new GwozaChat;
            $gwozachat->message = $request->message;
            $gwozachat->user()->associate($request->user());
            $gwozachat->save();
            return back();
        } elseif (auth()->user()->local_government == 'Hawul') {
            # code...
            $hawulchat = new HawulChat;
            $hawulchat->message = $request->message;
            $hawulchat->user()->associate($request->user());
            $hawulchat->save();
            return back();
        } elseif (auth()->user()->local_government == 'Kwaya Kusar') {
            # code...
            $kwayachat = new KwayaKusarChat;
            $kwayachat->message = $request->message;
            $kwayachat->user()->associate($request->user());
            $kwayachat->save();
            return back();
        } elseif (auth()->user()->local_government == 'Shani') {
            # code...
            $shanichat = new ShaniChat;
            $shanichat->message = $request->message;
            $shanichat->user()->associate($request->user());
            $shanichat->save();
            return back();
        } else {
            # code...
            return view('pages.chat.general');
        }
    }
}
