@props([
    'rows' => [],
])

<div class="overflow-x-auto">
    <table class="min-w-full text-xs">
        <thead class="text-slate-400 text-[11px] uppercase tracking-wide">
            <tr class="border-b border-slate-100">
                <th class="text-left py-3">Companies</th>
                <th class="text-left py-3">Budget</th>
                <th class="text-left py-3">Status</th>
                <th class="text-left py-3">Completion</th>
                <th class="text-left py-3"></th>
            </tr>
        </thead>
        <tbody class="text-[13px]">
            @foreach ($rows as $row)
                <tr class="border-b border-slate-50 last:border-0">
                    <td class="py-4">
                        <div class="flex items-center gap-3">
                            <img
                                src="{{ is_array($row) ? $row['logo'] : $row->logo }}"
                                alt=""
                                class="h-8 w-8 rounded-xl shadow-sm ring-1 ring-slate-100 bg-white"
                            >
                            <span class="font-semibold text-slate-700">{{ is_array($row) ? $row['name'] : $row->name }}</span>
                        </div>
                    </td>
                    <td class="py-4 text-slate-600 font-semibold">{{ is_array($row) ? $row['budget'] : $row->budget }}</td>
                    <td class="py-4 text-slate-600 font-semibold">{{ is_array($row) ? $row['status'] : $row->status }}</td>
                    <td class="py-4">
                        <div class="flex items-center gap-3">
                            <div class="flex-1 h-1.5 rounded-full bg-slate-100 overflow-hidden">
                                <div class="h-full rounded-full bg-[#4FD1C5]" style="width: {{ is_array($row) ? $row['completion'] : $row->completion }}%"></div>
                            </div>
                            <span class="text-xs font-semibold text-slate-600">{{ is_array($row) ? $row['completion'] : $row->completion }}%</span>
                        </div>
                    </td>
                    <td class="py-4 text-right">
                        <button class="text-slate-400 hover:text-slate-600">⋮</button>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

