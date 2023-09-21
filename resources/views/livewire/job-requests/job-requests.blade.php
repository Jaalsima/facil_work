<div>
    <x-guest-layout>
        <div>
            <!-- Vista 1 -->
            @if(empty($tempData['jobRequest']))
                <livewire:job-requests.step1 />
            @else
                <!-- Vista 2 -->
                @if(empty($tempData['location']))
                    <livewire:job-requests.step2 />
                @else
                    <!-- Vista 3 -->
                    @if(empty($tempData['place']))
                        <livewire:job-requests.step3 />
                    @else
                        <!-- Vista 4 -->
                        @if(empty($tempData['campo4'])) <!-- Asegúrate de reemplazar 'campo4' con el nombre correcto -->
                            <livewire:job-requests.step4 />
                        @else
                            <!-- Vista 5 -->
                            @if(empty($tempData['campo5'])) <!-- Asegúrate de reemplazar 'campo5' con el nombre correcto -->
                                <livewire:job-requests.step5 />
                            @endif
                        @endif
                    @endif
                @endif 
            @endif
        </div>
    </x-guest-layout>
</div>
