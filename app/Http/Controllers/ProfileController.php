<?php

namespace App\Http\Controllers;

use App\Models\Conversation;
use App\Models\PlatformSetting;
use App\Models\ProfileInfo;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    /**
     * Halaman Profile.
     */
    public function index()
    {
        // Get current authenticated user
        $user = Auth::user();

        if (!$user) {
            return redirect()->route('auth.signin')
                ->with('error', 'Silakan login terlebih dahulu untuk mengakses halaman profile.');
        }

        $profileInfo = ProfileInfo::where('user_id', $user->id)->first();
        $platformSettings = PlatformSetting::where('user_id', $user->id)->get()->groupBy('group');
        $conversations = Conversation::where('user_id', $user->id)->orderBy('created_at', 'desc')->limit(4)->get();

        return view('profile.index', compact('user', 'profileInfo', 'platformSettings', 'conversations'));
    }
}

