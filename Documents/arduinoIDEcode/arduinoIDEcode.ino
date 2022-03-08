

#include <SoftwareSerial.h>
#include <ThingSpeak.h>
#include <TinyGPS++.h>
#define RXD 16
#define TXD 17
#include <WiFi.h>
#include <WiFiClient.h>

SoftwareSerial serial_connection(16, 17); 
TinyGPSPlus gps;
WiFiClient  client;

unsigned long myChannelNumber = 1387303;
const char * myWriteAPIKey = "Y34UJAWRGHW6ANI4";
int i=0,k=0;
int  gps_status=0;
double latitude; 
double longitude;                       
String gpsString="";
const char *ssid = "SpellKasttt";
const char *pass = "Firefire4";
char *test="$GPGGA";
uint32_t baud = 9600;
const int led = 13;
void setup(void) {
  pinMode(led, OUTPUT);
  digitalWrite(led, 0);
  Serial.begin(baud);
  
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid, pass);
  Serial.println("");

  // Wait for connection
  while (WiFi.status() != WL_CONNECTED) {
    delay(500);
    Serial.print(".");
  }

  Serial.println("");
  Serial.print("Connected to ");
  Serial.println(ssid);
  Serial.print("IP address: ");
  Serial.println(WiFi.localIP());
  serial_connection.begin(9600);
   ThingSpeak.begin(client);
}

void loop(void) {
  
  while (serial_connection.available()) //While there are characters to come from the GPS
  {
    gps.encode(serial_connection.read());//This feeds the serial NMEA data into the library one char at a time
  }

  if (gps.location.isUpdated()) //This will pretty much be fired all the time anyway but will at least reduce it to only after a package of NMEA data comes in
  {
    //Get the latest info from the gps object which it derived from the data sent by the GPS unit
    Serial.println("Satellite Count:");
    Serial.println(gps.satellites.value());
    Serial.println("Latitude:");
    Serial.println(gps.location.lat(), 9);
    latitude= gps.location.lat(); 
    longitude=gps.location.lng();
    Serial.println("Longitude:");
    Serial.println(gps.location.lng(), 9);
    Serial.println("Speed MPH:");
    Serial.println(gps.speed.mph());
    Serial.println("Altitude Feet:");
    Serial.println(gps.altitude.feet());
    Serial.println("");
    String latbuf;
    latbuf += (String(latitude, 9));
    Serial.println(latbuf);
    String lonbuf;
    lonbuf += (String(longitude, 9));
    Serial.println(lonbuf);
     ThingSpeak.setField(1, latbuf);
    ThingSpeak.setField(2, lonbuf);
    ThingSpeak.writeFields(myChannelNumber, myWriteAPIKey); 
    delay(5000); 
  }
}
    
