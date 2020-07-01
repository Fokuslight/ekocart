<div class="col-md-6">
    <div class="form-group">
        <label>Last Name</label>
        <input @if (auth()->check()) value="{{ old('lname') ?? auth()->user()->profile->last_name }}" @else value="{{ old('lname') }}" @endif type="text" id="lname" class="form-control" placeholder="Your lastname"
               name="lname">
        @error('lname')
        <div class="help-block with-errors">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>Phone Number</label>
        <input @if (auth()->check()) value="{{ old('phone') ?? auth()->user()->profile->phone_number }}" @else value="{{ old('phone') }}" @endif type="text" id="phone" class="form-control" placeholder="Phone number"
               name="phone">
        @error('phone')
        <div class="help-block with-errors">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>Country</label>
        <input @if (auth()->check()) value="{{ old('country') ?? auth()->user()->profile->country }}" @else value="{{ old('country') }}" @endif type="text" id="country" class="form-control"
               placeholder="Country" name="country">
        @error('country')
        <div class="help-block with-errors">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>City</label>
        <input @if (auth()->check()) value="{{ old('city') ?? auth()->user()->profile->city }}" @else value="{{ old('city') }}" @endif type="text" id="city" class="form-control"
               placeholder="City" name="city">
        @error('city')
        <div class="help-block with-errors">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>State/Province</label>
        <input @if (auth()->check()) value="{{ old('state') ?? auth()->user()->profile->state }}" @else value="{{ old('state') }}" @endif type="text" id="statename" class="form-control"
               placeholder="State Province" name="state">
        @error('state')
        <div class="help-block with-errors">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label>Zip/Postal Code</label>
        <input @if (auth()->check()) value="{{ old('zip') ?? auth()->user()->profile->zip }}" @else value="{{ old('zip') }}" @endif type="text" id="zippostalcode" class="form-control"
               placeholder="Zip / Postal" name="zip">
        @error('zip')
        <div class="help-block with-errors">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label>Street</label>
        <input @if (auth()->check()) value="{{ old('street') ?? auth()->user()->profile->city }}" @else value="{{ old('street') }}" @endif type="text" id="towncity" class="form-control"
               placeholder="Street" name="street">
        @error('street')
        <div class="help-block with-errors">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-6">
    <div class="form-group mb-md-0">
        <label>House</label>
        <input @if (auth()->check()) value="{{ old('house') ?? auth()->user()->profile->house }}" @else value="{{ old('house') }}" @endif type="text" id="house" class="form-control"
               placeholder="House" name="house">
        @error('house')
        <div class="help-block with-errors">{{ $message }}</div>
        @enderror
    </div>
</div>
<div class="col-md-6">
    <div class="form-group mb-md-0">
        <label>Flat</label>
        <input @if (auth()->check()) value="{{ old('flat') ?? auth()->user()->profile->flat }}" @else value="{{ old('flat') }}" @endif type="text" id="flat" class="form-control"
               placeholder="Flat" name="flat">
        @error('flat')
        <div class="help-block with-errors">{{ $message }}</div>
        @enderror
    </div>
</div>
