<div class="card-body">
    <form action="/trash_type" method="POST" autocomplete="off" enctype="multipart/form-data">
        @csrf
        <div class="form-group mb-3">
            <label for="name">Name</label>
            <input type="text" id="name" name="name" class="form-control" placeholder="z.B. Restmüll" wire:model="name" />
            <small class="text-danger">{{ $errors->first('name') }}</small>
        </div>
        <div class="form-group mb-3">
            <label for="description">Beschreibung</label>
            <textarea type="text" id="description" name="description" class="form-control" rows="3"></textarea>
            <small class="text-danger">{{ $errors->first('description') }}</small>
        </div>
        <div class="form-group mb-3">
            <label for="with_article">Name mit Artikel <small><i>(Morgen wird ... abgeholt)</i></small></label>
            <input type="text" id="with_article" name="with_article" class="form-control" placeholder="z.B. der Restmüll" />
            <small class="text-danger">{{ $errors->first('with_article') }}</small>
        </div>
        <div class="row">
            <div class="col-sm-3 mb-3">
                <label for="color">Hintergrund</label>
                <input type="color" id="color" name="color" class="form-control form-control-color" value="{{ old('color') ?? '#000000' }}" wire:model="color" />
                <small class="text-danger">{{ $errors->first('color') }}</small>
            </div>
            <div class="col-sm-3 mb-3">
                <label for="text_color">Text</label>
                <input type="color" id="text_color" name="text_color" class="form-control form-control-color" value="{{ old('color') ?? '#ffffff' }}" wire:model="text_color" />
                <small class="text-danger">{{ $errors->first('text_color') }}</small>
            </div>
            <div class="col-sm-6 mb-3">
                <label for="preview">Vorschau</label>
                <input type="text"id="preview" name="preview" style="background-color: {{ $trash_color }}; color: {{ $text_color }}" class="form-control" value="{{ $trash_name }}" />
            </div>
        </div>
        <button class="btn btn-sm ms-2 mt-3 mb-3 float-end btn-success" type="submit"><i class="fas fa-plus"></i> Speichern</button>
        <a href="/trash_types" class="btn btn-sm ms-2 mt-3 mb-3 float-end btn-secondary"><i class="fas fa-arrow-left"></i> Zur&uuml;ck</a>
    </form>
</div>
