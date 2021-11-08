<div class="modal fade" id="exampleModal{{$materia->id}}" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">
                    Mesa de {{$materia->nombre}}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form method="POST" action="{{route('crear_mesa',['id'=>$materia->id])}}">
                    @csrf
                    <div class="form-group">
                        <label for="fecha">Fecha y Hora (Primer llamado):</label>
                        <input type="datetime-local" name="fecha" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="fecha_segundo">Fecha y Hora (Segundo llamado):</label>
                        <input type="datetime-local" name="fecha_segundo" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="presidente">Presidente:</label>
                        <input type="text" name="presidente" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="primer_vocal">Primer Vocal:</label>
                        <input type="primer_vocal" name="primer_vocal" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="segundo_vocal">Segundo Vocal:</label>
                        <input type="segundo_vocal" name="segundo_vocal" class="form-control" required>
                    </div>
                    <input type="submit" value="Configurar" class="btn btn-sm btn-success mt-2">
                </form>
            </div>
        </div>
    </div>
</div>