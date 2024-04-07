

















{{-- ======================================= --}}
<accordion>

<!-- Relatório Accordion -->
<div class="row mt-4">
    <div class="col-12">
        <div class="accordion" id="accordionExample">
            <!-- Total de colaboradores por Unidade -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                        Total de colaboradores por Unidade
                    </button>
                </h2>
                <div id="collapseOne" class="accordion-collapse collapse show" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        <x-colaboradores.report-tabela :unidades="$unidades" />
                    </div>
                </div>
            </div>

            <!-- Ranking de Colaboradores melhores avaliados -->
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        Ranking de Colaboradores melhores avaliados
                    </button>
                </h2>
                <div id="collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                    <div class="accordion-body">
                        {{ $slot }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</accordion>
