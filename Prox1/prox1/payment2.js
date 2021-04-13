let request = null;
try {
  request = new PaymentRequest(supportedInstruments, details);
} catch (e) {
  console.log('Payment Request Error: ' + e.message);
  return;
}
if (!request) {
  console.log('Web payments are not supported in this browser.');
  return;
}