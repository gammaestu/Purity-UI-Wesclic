@props([
    'rows' => [],
])

<div class="overflow-x-auto">
    <table class="min-w-full text-xs">
        <thead class="text-slate-400 text-[11px] uppercase tracking-wide">
            <tr class="border-b border-slate-100">
                <th class="text-left py-3">Author</th>
                <th class="text-left py-3">Function</th>
                <th class="text-left py-3">Status</th>
                <th class="text-left py-3">Employed</th>
                <th class="text-left py-3"></th>
            </tr>
        </thead>
        <tbody class="text-[13px]">
            @foreach ($rows as $row)
                <tr class="border-b border-slate-50 last:border-0">
                    <td class="py-4">
                        <div class="flex items-center gap-3">
                            <img
                                src="{{ is_array($row) ? $row['avatar'] : $row->avatar }}"
                                alt=""
                                class="h-10 w-10 rounded-2xl ring-1 ring-slate-100 bg-white object-cover"
                            >
                            <div>
                                <p class="font-semibold text-slate-700 leading-tight">{{ is_array($row) ? $row['name'] : $row->name }}</p>
                                <p class="text-[11px] text-slate-400">{{ is_array($row) ? $row['email'] : $row->email }}</p>
                            </div>
                        </div>
                    </td>
                    <td class="py-4">
                        <p class="font-semibold text-slate-700 leading-tight">{{ is_array($row) ? $row['role'] : $row->role }}</p>
                        <p class="text-[11px] text-slate-400">{{ is_array($row) ? $row['dept'] : $row->department }}</p>
                    </td>
                    <td class="py-4">
                        @php
                            $status = is_array($row) ? $row['status'] : $row->status;
                            $online = strtolower($status) === 'online';
                            $badge = $online ? 'bg-[#4FD1C5] text-white' : 'bg-slate-200 text-slate-600';
                        @endphp
                        <span class="inline-flex items-center justify-center rounded-full px-3 py-1 text-[11px] font-semibold {{ $badge }}">
                            {{ $status }}
                        </span>
                    </td>
                    <td class="py-4 text-slate-600 font-semibold">
                        {{ is_array($row) ? $row['employed'] : $row->employed_date->format('d/m/y') }}
                    </td>
                    <td class="py-4 text-right">
                        <button class="text-xs font-semibold text-slate-400 hover:text-slate-600">Edit</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

