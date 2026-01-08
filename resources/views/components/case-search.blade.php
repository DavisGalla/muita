<div class="flex justify-center mb-8">
    <div class="relative w-full max-w-md">
        <input type="text" id="case-search-input" placeholder="Search with " autocomplete="off"
            class="w-full p-3 pl-10 bg-white dark:bg-slate-900/40 backdrop-blur border border-slate-200 dark:border-slate-800 text-slate-900 dark:text-slate-100 placeholder-slate-500 dark:placeholder-slate-400 rounded-lg focus:ring-2 focus:ring-emerald-500 focus:border-emerald-500 transition-colors">
        <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-slate-400 dark:text-slate-400 absolute left-3 top-3.5"
            viewBox="0 0 20 20" fill="currentColor">
            <path fill-rule="evenodd"
                d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                clip-rule="evenodd" />
        </svg>
    </div>
</div>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        function filterCases() {
            const searchInput = document.getElementById('case-search-input');
            if (!searchInput) return;
            
            const searchTerm = searchInput.value.toLowerCase();
            const caseItems = document.querySelectorAll('.case-item');
            let hasVisibleItems = false;

            caseItems.forEach(item => {
                const id = item.getAttribute('data-id')?.toLowerCase() || '';
                const status = item.getAttribute('data-status')?.toLowerCase() || '';
                const vehiclePlate = item.getAttribute('vehicle-plate')?.toLowerCase() || '';
                const consignee = item.getAttribute('data-consignee')?.toLowerCase() || '';
                const declarant = item.getAttribute('data-declarant')?.toLowerCase() || '';
                
                const matches = id.includes(searchTerm) || 
                              status.includes(searchTerm) || 
                              consignee.includes(searchTerm) || 
                              declarant.includes(searchTerm) || 
                              vehiclePlate.includes(searchTerm);

                item.style.display = (searchTerm === '' || matches) ? 'block' : 'none';
                if (searchTerm === '' || matches) hasVisibleItems = true;
            });

            const emptyState = document.querySelector('.no-cases-message');
            if (emptyState) {
                emptyState.style.display = hasVisibleItems ? 'none' : 'block';
            }
        }

        const searchInput = document.getElementById('case-search-input');
        if (searchInput) {
            let debounceTimer;
            searchInput.addEventListener('input', () => {
                clearTimeout(debounceTimer);
                debounceTimer = setTimeout(filterCases, 300);
            });
            filterCases();
        }
    });
</script>