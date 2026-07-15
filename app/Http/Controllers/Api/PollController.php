<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Http\Requests\StorePollRequest;
use App\Http\Requests\UpdatePollRequest;
use App\Http\Resources\PollResource;
use App\Models\Poll;
use Illuminate\Http\Request;

class PollController extends Controller
{
    public function index(Request $request)
    {
        $query = Poll::with('user')->latest();

        if ($request->search) {
            $query->where('question', 'like', '%' . $request->search . '%');
        }

        if ($request->status) {
            $query->where('status', $request->status);
        }

        $polls = $query->paginate(1);
        return PollResource::collection($polls);
    }

    public function show(string $id)
    {
        $poll = Poll::with('user')->findOrFail($id);
        return new PollResource($poll);
    }

    public function store(StorePollRequest $request)
    {
        $data = $request->validated();
        $data['user_id'] = auth()->id();
        $data['options'] = collect($data['options'])->map(fn($option) => [
            'label' => trim($option),
            'votes' => 0,
        ])->values()->all();

        $poll = Poll::create($data);

        return response()->json(['message' => 'Poll created successfully', 'data' => new PollResource($poll)], 201);
    }

    public function update(UpdatePollRequest $request, string $id)
    {
        $poll = Poll::findOrFail($id);
        $data = $request->validated();

        $oldOptions = collect($poll->options ?? []);
        $data['options'] = collect($data['options'])->map(function ($option) use ($oldOptions) {
            $label = trim($option);
            $existing = $oldOptions->firstWhere('label', $label);
            return [
                'label' => $label,
                'votes' => $existing['votes'] ?? 0,
            ];
        })->values()->all();

        $poll->update($data);

        return response()->json(['message' => 'Poll updated successfully', 'data' => new PollResource($poll)]);
    }

    public function destroy(string $id)
    {
        $poll = Poll::findOrFail($id);
        $poll->delete();

        return response()->json(['message' => 'Poll deleted successfully']);
    }
}
