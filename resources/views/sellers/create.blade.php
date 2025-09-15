<!DOCTYPE html>
<html>
<head>
    <title>Add Seller</title>
    <!-- ✅ Add Bootstrap for styling -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="p-4">

    <div class="container">
        <h1 class="mb-4">Add a New Seller</h1>
        <h2 style="color:red">TEST</h2>

        <form method="POST" action="{{ route('sellers.store') }}">
            @csrf

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Name *</label>
                    <input type="text" name="name" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Email *</label>
                    <input type="email" name="email" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Phone *</label>
                    <input type="text" name="phone" class="form-control" required>

                </div>
                <div class="col-md-6">
                    <label class="form-label">Registration Number *</label>
                    <input type="text" name="registration_number" class="form-control" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">NTN *</label>
                    <input type="text" name="ntn" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label class="form-label">Province *</label>
                    <select name="province" class="form-select" required>
                        <option value="">-- Select Province --</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Sindh">Sindh</option>
                        <option value="KPK">KPK</option>
                        <option value="Balochistan">Balochistan</option>
                    </select>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col-md-6">
                    <label class="form-label">Sandbox Token</label>
                    <input type="text" name="sandbox_token" class="form-control">
                </div>
                <div class="col-md-6">
                    <label class="form-label">Production Token</label>
                    <input type="text" name="production_token" class="form-control">
                </div>
            </div>

            <div class="mb-3">
                <label class="form-label">Address</label>
                <input type="text" name="address" class="form-control">
            </div>

            <div class="mb-3">
                <label class="form-label">Environment *</label>
                <select name="environment" class="form-select" required>
                    <option value="">-- Select Environment --</option>
                    <option value="sandbox">Sandbox</option>
                    <option value="production">Production</option>
                </select>
            </div>

            <!-- ✅ Sale Scenarios Section -->
            <h5 class="mt-4">Sale Scenarios</h5>
            <div class="border rounded p-3" style="max-height: 250px; overflow-y: auto;">
                <div class="row">
                    @php
                        $scenarios = [
                            'SN001 - Goods at standard rate to registered buyers',
                            'SN002 - Goods at standard rate to unregistered buyers',
                            'SN003 - Sale of Steel (Melted and Re-Rolled)',
                            'SN004 - Sale by Ship Breakers',
                            'SN005 - Reduced rate sale',
                            'SN006 - Exempt goods sale',
                            'SN007 - Zero rated sale',
                            'SN008 - Sale of 3rd schedule goods',
                            'SN009 - Cotton Spinners purchase from Cotton Ginners',
                            'SN010 - Mobile Operators adds Sale (Telecom Sector)',
                            'SN011 - Toll Manufacturing sale by Steel sector',
                            'SN012 - Sale of Petroleum products',
                            'SN013 - Electricity Supply to Retailers',
                            'SN014 - Sale of Gas to CNG stations',
                            'SN015 - Sale of mobile phones',
                            'SN016 - Processing / Conversion of Goods',
                            'SN017 - Goods where FED is charged in ST mode',
                            'SN018 - Services where FED is charged in ST mode',
                            'SN019 - Sale of Services',
                            'SN020 - Sale of Electric Vehicles',
                            'SN021 - Sale of Cement/Concrete Block',
                            'SN022 - Sale of Potassium Chlorate',
                            'SN023 - Sale of CNG',
                            'SN024 - Goods listed in SRO 297(1)/2023',
                            'SN025 - Drugs sold at fixed ST rate',
                            'SN026 - Sale to End Consumer by retailers',
                            'SN027 - Sale to End Consumer by retailers',
                            'SN028 - Sale to End Consumer by retailers',
                        ];
                    @endphp

                    @foreach($scenarios as $index => $scenario)
                        <div class="col-md-6 mb-2">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" 
                                       name="scenarios[]" value="{{ $scenario }}" id="scenario{{ $index }}">
                                <label class="form-check-label" for="scenario{{ $index }}">
                                    {{ $scenario }}
                                </label>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="btn btn-primary">Save Seller</button>
                <a href="{{ route('sellers.index') }}" class="btn btn-secondary">Cancel</a>
            </div>
        </form>
    </div>
</body>
</html>
