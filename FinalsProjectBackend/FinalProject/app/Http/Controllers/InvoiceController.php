public function createInvoice(Request $request)
{
    $request->validate([
        'address' => 'required|string|min:10|max:100',
        'postal_code' => 'required|string|size:5'
    ]);

    $invoiceNumber = 'INV-' . time(); 

    $invoice = Invoice::create([
        'invoice_number' => $invoiceNumber,
        'user_id' => auth()->id(),
        'address' => $request->address,
        'postal_code' => $request->postal_code,
        'total_price' => 
    ]);

    return redirect()->route('invoice.show', $invoice->id)->with('success', 'Faktur berhasil dibuat.');
}
