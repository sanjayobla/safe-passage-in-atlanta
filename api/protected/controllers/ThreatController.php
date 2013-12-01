<?php

class ThreatController extends Controller
{
	public function actionIndex()
	{
		$this->render('index');
	}

        public function actionNodeLink() {
                $json_string = '{"routes":[{"bounds":{"fa":{"d":33.77741,"b":33.78954},"ga":{"b":-84.40452,"d":-84.3978}},"copyrights":"Map data ©2013 Google","legs":[{"distance":{"text":"1.3 mi","value":2067},"duration":{"text":"6 mins","value":344},"end_address":"801 Atlantic Drive Northwest, Georgia Institute of Technology, Atlanta, GA 30332, USA","end_location":{"ob":33.7774125,"pb":-84.39780630000001},"start_address":"470 16th Street, Atlanta, GA 30318, USA","start_location":{"ob":33.7879531,"pb":-84.404448},"steps":[{"distance":{"text":"43 ft","value":13},"duration":{"text":"1 min","value":2},"end_location":{"ob":33.7880549,"pb":-84.40452149999999},"polyline":{"points":"uefmExfdbOSL"},"start_location":{"ob":33.7879531,"pb":-84.404448},"travel_mode":"DRIVING","encoded_lat_lngs":"uefmExfdbOSL","path":[{"ob":33.78795,"pb":-84.40445000000001},{"ob":33.788050000000005,"pb":-84.40452}],"lat_lngs":[{"ob":33.78795,"pb":-84.40445000000001},{"ob":33.788050000000005,"pb":-84.40452}],"instructions":"Head <b>northwest</b> toward <b>16th St NW</b>","maneuver":"","start_point":{"ob":33.7879531,"pb":-84.404448},"end_point":{"ob":33.7880549,"pb":-84.40452149999999}},{"distance":{"text":"0.3 mi","value":555},"duration":{"text":"1 min","value":69},"end_location":{"ob":33.7895427,"pb":-84.399},"maneuver":"turn-right","polyline":{"points":"iffmEfgdbO[u@eA}BUa@KUESAYAcA?k@?_C?wD?a@AKG_@EUGQMYUo@e@oASi@Sk@KYEM"},"start_location":{"ob":33.7880549,"pb":-84.40452149999999},"travel_mode":"DRIVING","encoded_lat_lngs":"iffmEfgdbO[u@eA}BUa@KUESAYAcA?k@?_C?wD?a@AKG_@EUGQMYUo@e@oASi@Sk@KYEM","path":[{"ob":33.788050000000005,"pb":-84.40452},{"ob":33.78819,"pb":-84.40425},{"ob":33.788540000000005,"pb":-84.40362},{"ob":33.788650000000004,"pb":-84.40345},{"ob":33.78871,"pb":-84.40334},{"ob":33.788740000000004,"pb":-84.40324000000001},{"ob":33.78875,"pb":-84.40311000000001},{"ob":33.78876,"pb":-84.40277},{"ob":33.78876,"pb":-84.40255},{"ob":33.78876,"pb":-84.40191},{"ob":33.78876,"pb":-84.40099000000001},{"ob":33.78876,"pb":-84.40082000000001},{"ob":33.78877,"pb":-84.40076},{"ob":33.788810000000005,"pb":-84.40060000000001},{"ob":33.78884,"pb":-84.40049},{"ob":33.788880000000006,"pb":-84.4004},{"ob":33.78895,"pb":-84.40027},{"ob":33.789060000000006,"pb":-84.40003},{"ob":33.78925,"pb":-84.39963},{"ob":33.789350000000006,"pb":-84.39942},{"ob":33.78945,"pb":-84.39920000000001},{"ob":33.78951,"pb":-84.39907000000001},{"ob":33.78954,"pb":-84.399}],"lat_lngs":[{"ob":33.788050000000005,"pb":-84.40452},{"ob":33.78819,"pb":-84.40425},{"ob":33.788540000000005,"pb":-84.40362},{"ob":33.788650000000004,"pb":-84.40345},{"ob":33.78871,"pb":-84.40334},{"ob":33.788740000000004,"pb":-84.40324000000001},{"ob":33.78875,"pb":-84.40311000000001},{"ob":33.78876,"pb":-84.40277},{"ob":33.78876,"pb":-84.40255},{"ob":33.78876,"pb":-84.40191},{"ob":33.78876,"pb":-84.40099000000001},{"ob":33.78876,"pb":-84.40082000000001},{"ob":33.78877,"pb":-84.40076},{"ob":33.788810000000005,"pb":-84.40060000000001},{"ob":33.78884,"pb":-84.40049},{"ob":33.788880000000006,"pb":-84.4004},{"ob":33.78895,"pb":-84.40027},{"ob":33.789060000000006,"pb":-84.40003},{"ob":33.78925,"pb":-84.39963},{"ob":33.789350000000006,"pb":-84.39942},{"ob":33.78945,"pb":-84.39920000000001},{"ob":33.78951,"pb":-84.39907000000001},{"ob":33.78954,"pb":-84.399}],"instructions":"Turn <b>right</b> onto <b>16th St NW</b>","start_point":{"ob":33.7880549,"pb":-84.40452149999999},"end_point":{"ob":33.7895427,"pb":-84.399}},{"distance":{"text":"0.8 mi","value":1274},"duration":{"text":"4 mins","value":231},"end_location":{"ob":33.778271,"pb":-84.39922079999997},"maneuver":"turn-right","polyline":{"points":"sofmEvdcbO@[BKFGHG@Ad@?rB?pFBvF@J?H?H?J?P@rI^hBFv@DjBHjADlBLjAFvDCPFJAp@@~A?F?vCD`C?"},"start_location":{"ob":33.7895427,"pb":-84.399},"travel_mode":"DRIVING","encoded_lat_lngs":"sofmEvdcbO@[BKFGHG@Ad@?rB?pFBvF@J?H?H?J?P@rI^hBFv@DjBHjADlBLjAFvDCPFJAp@@~A?F?vCD`C?","path":[{"ob":33.78954,"pb":-84.399},{"ob":33.789530000000006,"pb":-84.39886000000001},{"ob":33.78951,"pb":-84.39880000000001},{"ob":33.78947,"pb":-84.39876000000001},{"ob":33.78942,"pb":-84.39872000000001},{"ob":33.789410000000004,"pb":-84.39871000000001},{"ob":33.78922,"pb":-84.39871000000001},{"ob":33.78864,"pb":-84.39871000000001},{"ob":33.78743,"pb":-84.39873},{"ob":33.786190000000005,"pb":-84.39874},{"ob":33.78613,"pb":-84.39874},{"ob":33.786080000000005,"pb":-84.39874},{"ob":33.786030000000004,"pb":-84.39874},{"ob":33.785970000000006,"pb":-84.39874},{"ob":33.785880000000006,"pb":-84.39875},{"ob":33.78418,"pb":-84.39891},{"ob":33.78365,"pb":-84.39895000000001},{"ob":33.783370000000005,"pb":-84.39898000000001},{"ob":33.782830000000004,"pb":-84.39903000000001},{"ob":33.782450000000004,"pb":-84.39906},{"ob":33.7819,"pb":-84.39913000000001},{"ob":33.78152,"pb":-84.39917000000001},{"ob":33.7806,"pb":-84.39915},{"ob":33.78051,"pb":-84.39919},{"ob":33.78045,"pb":-84.39918},{"ob":33.7802,"pb":-84.39919},{"ob":33.779720000000005,"pb":-84.39919},{"ob":33.779680000000006,"pb":-84.39919},{"ob":33.77892,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39922000000001}],"lat_lngs":[{"ob":33.78954,"pb":-84.399},{"ob":33.789530000000006,"pb":-84.39886000000001},{"ob":33.78951,"pb":-84.39880000000001},{"ob":33.78947,"pb":-84.39876000000001},{"ob":33.78942,"pb":-84.39872000000001},{"ob":33.789410000000004,"pb":-84.39871000000001},{"ob":33.78922,"pb":-84.39871000000001},{"ob":33.78864,"pb":-84.39871000000001},{"ob":33.78743,"pb":-84.39873},{"ob":33.786190000000005,"pb":-84.39874},{"ob":33.78613,"pb":-84.39874},{"ob":33.786080000000005,"pb":-84.39874},{"ob":33.786030000000004,"pb":-84.39874},{"ob":33.785970000000006,"pb":-84.39874},{"ob":33.785880000000006,"pb":-84.39875},{"ob":33.78418,"pb":-84.39891},{"ob":33.78365,"pb":-84.39895000000001},{"ob":33.783370000000005,"pb":-84.39898000000001},{"ob":33.782830000000004,"pb":-84.39903000000001},{"ob":33.782450000000004,"pb":-84.39906},{"ob":33.7819,"pb":-84.39913000000001},{"ob":33.78152,"pb":-84.39917000000001},{"ob":33.7806,"pb":-84.39915},{"ob":33.78051,"pb":-84.39919},{"ob":33.78045,"pb":-84.39918},{"ob":33.7802,"pb":-84.39919},{"ob":33.779720000000005,"pb":-84.39919},{"ob":33.779680000000006,"pb":-84.39919},{"ob":33.77892,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39922000000001}],"instructions":"Turn <b>right</b> onto <b>State St NW</b>","start_point":{"ob":33.7895427,"pb":-84.399},"end_point":{"ob":33.778271,"pb":-84.39922079999997}},{"distance":{"text":"433 ft","value":132},"duration":{"text":"1 min","value":25},"end_location":{"ob":33.778252,"pb":-84.39779659999999},"maneuver":"turn-left","polyline":{"points":"eidmEbfcbO?Q?KB}F"},"start_location":{"ob":33.778271,"pb":-84.39922079999997},"travel_mode":"DRIVING","encoded_lat_lngs":"eidmEbfcbO?Q?KB}F","path":[{"ob":33.778270000000006,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39913000000001},{"ob":33.778270000000006,"pb":-84.39907000000001},{"ob":33.77825,"pb":-84.3978}],"lat_lngs":[{"ob":33.778270000000006,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39913000000001},{"ob":33.778270000000006,"pb":-84.39907000000001},{"ob":33.77825,"pb":-84.3978}],"instructions":"Turn <b>left</b> onto <b>Ferst Dr</b>","start_point":{"ob":33.778271,"pb":-84.39922079999997},"end_point":{"ob":33.778252,"pb":-84.39779659999999}},{"distance":{"text":"305 ft","value":93},"duration":{"text":"1 min","value":17},"end_location":{"ob":33.7774125,"pb":-84.39780630000001},"polyline":{"points":"aidmEf}bbO~A?fA@"},"start_location":{"ob":33.778252,"pb":-84.39779659999999},"travel_mode":"DRIVING","encoded_lat_lngs":"aidmEf}bbO~A?fA@","path":[{"ob":33.77825,"pb":-84.3978},{"ob":33.777770000000004,"pb":-84.3978},{"ob":33.77741,"pb":-84.39781}],"lat_lngs":[{"ob":33.77825,"pb":-84.3978},{"ob":33.777770000000004,"pb":-84.3978},{"ob":33.77741,"pb":-84.39781}],"instructions":"Take the 1st <b>right</b> onto <b>Atlantic Dr NW</b><div style=\"font-size:0.9em\">Destination will be on the left</div>","maneuver":"","start_point":{"ob":33.778252,"pb":-84.39779659999999},"end_point":{"ob":33.7774125,"pb":-84.39780630000001}}],"via_waypoint":[],"via_waypoints":[]}],"overview_polyline":{"points":"uefmExfdbOSL[u@{A_DQi@C}A?eKIk@Mg@}AcE_@eAEM@[JSJIbSDj@?fOn@pJd@vDCPF|@?fB?xGD?]B}F~A?fA@"},"summary":"16th St NW and State St NW","warnings":[],"waypoint_order":[],"overview_path":[{"ob":33.78795,"pb":-84.40445000000001},{"ob":33.788050000000005,"pb":-84.40452},{"ob":33.78819,"pb":-84.40425},{"ob":33.788650000000004,"pb":-84.40345},{"ob":33.788740000000004,"pb":-84.40324000000001},{"ob":33.78876,"pb":-84.40277},{"ob":33.78876,"pb":-84.40082000000001},{"ob":33.788810000000005,"pb":-84.40060000000001},{"ob":33.788880000000006,"pb":-84.4004},{"ob":33.789350000000006,"pb":-84.39942},{"ob":33.78951,"pb":-84.39907000000001},{"ob":33.78954,"pb":-84.399},{"ob":33.789530000000006,"pb":-84.39886000000001},{"ob":33.78947,"pb":-84.39876000000001},{"ob":33.789410000000004,"pb":-84.39871000000001},{"ob":33.786190000000005,"pb":-84.39874},{"ob":33.785970000000006,"pb":-84.39874},{"ob":33.783370000000005,"pb":-84.39898000000001},{"ob":33.78152,"pb":-84.39917000000001},{"ob":33.7806,"pb":-84.39915},{"ob":33.78051,"pb":-84.39919},{"ob":33.7802,"pb":-84.39919},{"ob":33.779680000000006,"pb":-84.39919},{"ob":33.778270000000006,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39907000000001},{"ob":33.77825,"pb":-84.3978},{"ob":33.777770000000004,"pb":-84.3978},{"ob":33.77741,"pb":-84.39781}]},{"bounds":{"fa":{"d":33.77741,"b":33.789060000000006},"ga":{"b":-84.40452,"d":-84.3978}},"copyrights":"Map data ©2013 Google","legs":[{"distance":{"text":"1.3 mi","value":2093},"duration":{"text":"6 mins","value":374},"end_address":"801 Atlantic Drive Northwest, Georgia Institute of Technology, Atlanta, GA 30332, USA","end_location":{"ob":33.7774125,"pb":-84.39780630000001},"start_address":"470 16th Street, Atlanta, GA 30318, USA","start_location":{"ob":33.7879531,"pb":-84.404448},"steps":[{"distance":{"text":"43 ft","value":13},"duration":{"text":"1 min","value":2},"end_location":{"ob":33.7880549,"pb":-84.40452149999999},"polyline":{"points":"uefmExfdbOSL"},"start_location":{"ob":33.7879531,"pb":-84.404448},"travel_mode":"DRIVING","encoded_lat_lngs":"uefmExfdbOSL","path":[{"ob":33.78795,"pb":-84.40445000000001},{"ob":33.788050000000005,"pb":-84.40452}],"lat_lngs":[{"ob":33.78795,"pb":-84.40445000000001},{"ob":33.788050000000005,"pb":-84.40452}],"instructions":"Head <b>northwest</b> toward <b>16th St NW</b>","maneuver":"","start_point":{"ob":33.7879531,"pb":-84.404448},"end_point":{"ob":33.7880549,"pb":-84.40452149999999}},{"distance":{"text":"0.3 mi","value":446},"duration":{"text":"1 min","value":61},"end_location":{"ob":33.7890627,"pb":-84.40003300000001},"maneuver":"turn-right","polyline":{"points":"iffmEfgdbO[u@eA}BUa@KUESAYAcA?k@?_C?wD?a@AKG_@EUGQMYUo@"},"start_location":{"ob":33.7880549,"pb":-84.40452149999999},"travel_mode":"DRIVING","encoded_lat_lngs":"iffmEfgdbO[u@eA}BUa@KUESAYAcA?k@?_C?wD?a@AKG_@EUGQMYUo@","path":[{"ob":33.788050000000005,"pb":-84.40452},{"ob":33.78819,"pb":-84.40425},{"ob":33.788540000000005,"pb":-84.40362},{"ob":33.788650000000004,"pb":-84.40345},{"ob":33.78871,"pb":-84.40334},{"ob":33.788740000000004,"pb":-84.40324000000001},{"ob":33.78875,"pb":-84.40311000000001},{"ob":33.78876,"pb":-84.40277},{"ob":33.78876,"pb":-84.40255},{"ob":33.78876,"pb":-84.40191},{"ob":33.78876,"pb":-84.40099000000001},{"ob":33.78876,"pb":-84.40082000000001},{"ob":33.78877,"pb":-84.40076},{"ob":33.788810000000005,"pb":-84.40060000000001},{"ob":33.78884,"pb":-84.40049},{"ob":33.788880000000006,"pb":-84.4004},{"ob":33.78895,"pb":-84.40027},{"ob":33.789060000000006,"pb":-84.40003}],"lat_lngs":[{"ob":33.788050000000005,"pb":-84.40452},{"ob":33.78819,"pb":-84.40425},{"ob":33.788540000000005,"pb":-84.40362},{"ob":33.788650000000004,"pb":-84.40345},{"ob":33.78871,"pb":-84.40334},{"ob":33.788740000000004,"pb":-84.40324000000001},{"ob":33.78875,"pb":-84.40311000000001},{"ob":33.78876,"pb":-84.40277},{"ob":33.78876,"pb":-84.40255},{"ob":33.78876,"pb":-84.40191},{"ob":33.78876,"pb":-84.40099000000001},{"ob":33.78876,"pb":-84.40082000000001},{"ob":33.78877,"pb":-84.40076},{"ob":33.788810000000005,"pb":-84.40060000000001},{"ob":33.78884,"pb":-84.40049},{"ob":33.788880000000006,"pb":-84.4004},{"ob":33.78895,"pb":-84.40027},{"ob":33.789060000000006,"pb":-84.40003}],"instructions":"Turn <b>right</b> onto <b>16th St NW</b>","start_point":{"ob":33.7880549,"pb":-84.40452149999999},"end_point":{"ob":33.7890627,"pb":-84.40003300000001}},{"distance":{"text":"0.4 mi","value":606},"duration":{"text":"2 mins","value":127},"end_location":{"ob":33.7836659,"pb":-84.39987200000002},"maneuver":"turn-right","polyline":{"points":"slfmEdkcbOVQXOPINCpFBT@rBAjBAF?D?D?D?F?rHJbD@"},"start_location":{"ob":33.7890627,"pb":-84.40003300000001},"travel_mode":"DRIVING","encoded_lat_lngs":"slfmEdkcbOVQXOPINCpFBT@rBAjBAF?D?D?D?F?rHJbD@","path":[{"ob":33.789060000000006,"pb":-84.40003},{"ob":33.788940000000004,"pb":-84.39994},{"ob":33.788810000000005,"pb":-84.39986},{"ob":33.788720000000005,"pb":-84.39981},{"ob":33.78864,"pb":-84.39979000000001},{"ob":33.78743,"pb":-84.39981},{"ob":33.78732,"pb":-84.39982},{"ob":33.78674,"pb":-84.39981},{"ob":33.7862,"pb":-84.39980000000001},{"ob":33.78616,"pb":-84.39980000000001},{"ob":33.78613,"pb":-84.39980000000001},{"ob":33.786100000000005,"pb":-84.39980000000001},{"ob":33.78607,"pb":-84.39980000000001},{"ob":33.786030000000004,"pb":-84.39980000000001},{"ob":33.784490000000005,"pb":-84.39986},{"ob":33.78367,"pb":-84.39987}],"lat_lngs":[{"ob":33.789060000000006,"pb":-84.40003},{"ob":33.788940000000004,"pb":-84.39994},{"ob":33.788810000000005,"pb":-84.39986},{"ob":33.788720000000005,"pb":-84.39981},{"ob":33.78864,"pb":-84.39979000000001},{"ob":33.78743,"pb":-84.39981},{"ob":33.78732,"pb":-84.39982},{"ob":33.78674,"pb":-84.39981},{"ob":33.7862,"pb":-84.39980000000001},{"ob":33.78616,"pb":-84.39980000000001},{"ob":33.78613,"pb":-84.39980000000001},{"ob":33.786100000000005,"pb":-84.39980000000001},{"ob":33.78607,"pb":-84.39980000000001},{"ob":33.786030000000004,"pb":-84.39980000000001},{"ob":33.784490000000005,"pb":-84.39986},{"ob":33.78367,"pb":-84.39987}],"instructions":"Turn <b>right</b> onto <b>Mecaslin St NW</b>","start_point":{"ob":33.7890627,"pb":-84.40003300000001},"end_point":{"ob":33.7836659,"pb":-84.39987200000002}},{"distance":{"text":"223 ft","value":68},"duration":{"text":"1 min","value":16},"end_location":{"ob":33.7836793,"pb":-84.40060470000003},"maneuver":"turn-right","polyline":{"points":"}jemEdjcbOApC"},"start_location":{"ob":33.7836659,"pb":-84.39987200000002},"travel_mode":"DRIVING","encoded_lat_lngs":"}jemEdjcbOApC","path":[{"ob":33.78367,"pb":-84.39987},{"ob":33.783680000000004,"pb":-84.40060000000001}],"lat_lngs":[{"ob":33.78367,"pb":-84.39987},{"ob":33.783680000000004,"pb":-84.40060000000001}],"instructions":"Turn <b>right</b> onto <b>Richards St NW</b>","start_point":{"ob":33.7836659,"pb":-84.39987200000002},"end_point":{"ob":33.7836793,"pb":-84.40060470000003}},{"distance":{"text":"0.1 mi","value":241},"duration":{"text":"1 min","value":39},"end_location":{"ob":33.78151500000001,"pb":-84.40060289999997},"polyline":{"points":"_kemEvncbObD?D?R?jA?j@?xB?"},"start_location":{"ob":33.7836793,"pb":-84.40060470000003},"travel_mode":"DRIVING","encoded_lat_lngs":"_kemEvncbObD?D?R?jA?j@?xB?","path":[{"ob":33.783680000000004,"pb":-84.40060000000001},{"ob":33.78286,"pb":-84.40060000000001},{"ob":33.782830000000004,"pb":-84.40060000000001},{"ob":33.78273,"pb":-84.40060000000001},{"ob":33.78235,"pb":-84.40060000000001},{"ob":33.78213,"pb":-84.40060000000001},{"ob":33.78152,"pb":-84.40060000000001}],"lat_lngs":[{"ob":33.783680000000004,"pb":-84.40060000000001},{"ob":33.78286,"pb":-84.40060000000001},{"ob":33.782830000000004,"pb":-84.40060000000001},{"ob":33.78273,"pb":-84.40060000000001},{"ob":33.78235,"pb":-84.40060000000001},{"ob":33.78213,"pb":-84.40060000000001},{"ob":33.78152,"pb":-84.40060000000001}],"instructions":"Take the 1st <b>left</b> onto <b>Tumlin St NW</b>","maneuver":"","start_point":{"ob":33.7836793,"pb":-84.40060470000003},"end_point":{"ob":33.78151500000001,"pb":-84.40060289999997}},{"distance":{"text":"433 ft","value":132},"duration":{"text":"1 min","value":46},"end_location":{"ob":33.7815188,"pb":-84.39916970000002},"maneuver":"turn-left","polyline":{"points":"o}dmEvncbO@aA?gAAsC"},"start_location":{"ob":33.78151500000001,"pb":-84.40060289999997},"travel_mode":"DRIVING","encoded_lat_lngs":"o}dmEvncbO@aA?gAAsC","path":[{"ob":33.78152,"pb":-84.40060000000001},{"ob":33.781510000000004,"pb":-84.40027},{"ob":33.781510000000004,"pb":-84.39991},{"ob":33.78152,"pb":-84.39917000000001}],"lat_lngs":[{"ob":33.78152,"pb":-84.40060000000001},{"ob":33.781510000000004,"pb":-84.40027},{"ob":33.781510000000004,"pb":-84.39991},{"ob":33.78152,"pb":-84.39917000000001}],"instructions":"Turn <b>left</b> onto <b>10th St NW</b>","start_point":{"ob":33.78151500000001,"pb":-84.40060289999997},"end_point":{"ob":33.7815188,"pb":-84.39916970000002}},{"distance":{"text":"0.2 mi","value":362},"duration":{"text":"1 min","value":41},"end_location":{"ob":33.778271,"pb":-84.39922079999997},"polyline":{"points":"o}dmExecbOvDCPFJAp@@~A?F?vCD`C?"},"start_location":{"ob":33.7815188,"pb":-84.39916970000002},"travel_mode":"DRIVING","encoded_lat_lngs":"o}dmExecbOvDCPFJAp@@~A?F?vCD`C?","path":[{"ob":33.78152,"pb":-84.39917000000001},{"ob":33.7806,"pb":-84.39915},{"ob":33.78051,"pb":-84.39919},{"ob":33.78045,"pb":-84.39918},{"ob":33.7802,"pb":-84.39919},{"ob":33.779720000000005,"pb":-84.39919},{"ob":33.779680000000006,"pb":-84.39919},{"ob":33.77892,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39922000000001}],"lat_lngs":[{"ob":33.78152,"pb":-84.39917000000001},{"ob":33.7806,"pb":-84.39915},{"ob":33.78051,"pb":-84.39919},{"ob":33.78045,"pb":-84.39918},{"ob":33.7802,"pb":-84.39919},{"ob":33.779720000000005,"pb":-84.39919},{"ob":33.779680000000006,"pb":-84.39919},{"ob":33.77892,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39922000000001}],"instructions":"Take the 2nd <b>right</b> onto <b>State St NW</b>","maneuver":"","start_point":{"ob":33.7815188,"pb":-84.39916970000002},"end_point":{"ob":33.778271,"pb":-84.39922079999997}},{"distance":{"text":"433 ft","value":132},"duration":{"text":"1 min","value":25},"end_location":{"ob":33.778252,"pb":-84.39779659999999},"maneuver":"turn-left","polyline":{"points":"eidmEbfcbO?Q?KB}F"},"start_location":{"ob":33.778271,"pb":-84.39922079999997},"travel_mode":"DRIVING","encoded_lat_lngs":"eidmEbfcbO?Q?KB}F","path":[{"ob":33.778270000000006,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39913000000001},{"ob":33.778270000000006,"pb":-84.39907000000001},{"ob":33.77825,"pb":-84.3978}],"lat_lngs":[{"ob":33.778270000000006,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39913000000001},{"ob":33.778270000000006,"pb":-84.39907000000001},{"ob":33.77825,"pb":-84.3978}],"instructions":"Turn <b>left</b> onto <b>Ferst Dr</b>","start_point":{"ob":33.778271,"pb":-84.39922079999997},"end_point":{"ob":33.778252,"pb":-84.39779659999999}},{"distance":{"text":"305 ft","value":93},"duration":{"text":"1 min","value":17},"end_location":{"ob":33.7774125,"pb":-84.39780630000001},"polyline":{"points":"aidmEf}bbO~A?fA@"},"start_location":{"ob":33.778252,"pb":-84.39779659999999},"travel_mode":"DRIVING","encoded_lat_lngs":"aidmEf}bbO~A?fA@","path":[{"ob":33.77825,"pb":-84.3978},{"ob":33.777770000000004,"pb":-84.3978},{"ob":33.77741,"pb":-84.39781}],"lat_lngs":[{"ob":33.77825,"pb":-84.3978},{"ob":33.777770000000004,"pb":-84.3978},{"ob":33.77741,"pb":-84.39781}],"instructions":"Take the 1st <b>right</b> onto <b>Atlantic Dr NW</b><div style=\"font-size:0.9em\">Destination will be on the right</div>","maneuver":"","start_point":{"ob":33.778252,"pb":-84.39779659999999},"end_point":{"ob":33.7774125,"pb":-84.39780630000001}}],"via_waypoint":[{"location":{"ob":33.7824289,"pb":-84.40059759999997},"step_index":4,"step_interpolation":0.5777674812113023}],"via_waypoints":[{"ob":33.7824289,"pb":-84.40059759999997}]}],"overview_polyline":{"points":"uefmExfdbOSL[u@{A_DQi@C}A?eKIk@Mg@c@iAp@a@`@MfGDlFCfIJbD@ApChD?dG?@iCAsCvDC\\DpC@~CD`C??QBiGfD@"},"summary":"Mecaslin St NW","warnings":[],"waypoint_order":[],"overview_path":[{"ob":33.78795,"pb":-84.40445000000001},{"ob":33.788050000000005,"pb":-84.40452},{"ob":33.78819,"pb":-84.40425},{"ob":33.788650000000004,"pb":-84.40345},{"ob":33.788740000000004,"pb":-84.40324000000001},{"ob":33.78876,"pb":-84.40277},{"ob":33.78876,"pb":-84.40082000000001},{"ob":33.788810000000005,"pb":-84.40060000000001},{"ob":33.788880000000006,"pb":-84.4004},{"ob":33.789060000000006,"pb":-84.40003},{"ob":33.788810000000005,"pb":-84.39986},{"ob":33.78864,"pb":-84.39979000000001},{"ob":33.78732,"pb":-84.39982},{"ob":33.78613,"pb":-84.39980000000001},{"ob":33.784490000000005,"pb":-84.39986},{"ob":33.78367,"pb":-84.39987},{"ob":33.783680000000004,"pb":-84.40060000000001},{"ob":33.782830000000004,"pb":-84.40060000000001},{"ob":33.78152,"pb":-84.40060000000001},{"ob":33.781510000000004,"pb":-84.39991},{"ob":33.78152,"pb":-84.39917000000001},{"ob":33.7806,"pb":-84.39915},{"ob":33.78045,"pb":-84.39918},{"ob":33.779720000000005,"pb":-84.39919},{"ob":33.77892,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39913000000001},{"ob":33.77825,"pb":-84.3978},{"ob":33.77741,"pb":-84.39781}]},{"bounds":{"fa":{"d":33.77741,"b":33.789060000000006},"ga":{"b":-84.40701000000001,"d":-84.3978}},"copyrights":"Map data ©2013 Google","legs":[{"distance":{"text":"1.8 mi","value":2894},"duration":{"text":"7 mins","value":417},"end_address":"801 Atlantic Drive Northwest, Georgia Institute of Technology, Atlanta, GA 30332, USA","end_location":{"ob":33.7774125,"pb":-84.39780630000001},"start_address":"470 16th Street, Atlanta, GA 30318, USA","start_location":{"ob":33.7879531,"pb":-84.404448},"steps":[{"distance":{"text":"43 ft","value":13},"duration":{"text":"1 min","value":2},"end_location":{"ob":33.7880549,"pb":-84.40452149999999},"polyline":{"points":"uefmExfdbOSL"},"start_location":{"ob":33.7879531,"pb":-84.404448},"travel_mode":"DRIVING","encoded_lat_lngs":"uefmExfdbOSL","path":[{"ob":33.78795,"pb":-84.40445000000001},{"ob":33.788050000000005,"pb":-84.40452}],"lat_lngs":[{"ob":33.78795,"pb":-84.40445000000001},{"ob":33.788050000000005,"pb":-84.40452}],"instructions":"Head <b>northwest</b> toward <b>16th St NW</b>","maneuver":"","start_point":{"ob":33.7879531,"pb":-84.404448},"end_point":{"ob":33.7880549,"pb":-84.40452149999999}},{"distance":{"text":"0.3 mi","value":446},"duration":{"text":"1 min","value":61},"end_location":{"ob":33.7890627,"pb":-84.40003300000001},"maneuver":"turn-right","polyline":{"points":"iffmEfgdbO[u@eA}BUa@KUESAYAcA?k@?_C?wD?a@AKG_@EUGQMYUo@"},"start_location":{"ob":33.7880549,"pb":-84.40452149999999},"travel_mode":"DRIVING","encoded_lat_lngs":"iffmEfgdbO[u@eA}BUa@KUESAYAcA?k@?_C?wD?a@AKG_@EUGQMYUo@","path":[{"ob":33.788050000000005,"pb":-84.40452},{"ob":33.78819,"pb":-84.40425},{"ob":33.788540000000005,"pb":-84.40362},{"ob":33.788650000000004,"pb":-84.40345},{"ob":33.78871,"pb":-84.40334},{"ob":33.788740000000004,"pb":-84.40324000000001},{"ob":33.78875,"pb":-84.40311000000001},{"ob":33.78876,"pb":-84.40277},{"ob":33.78876,"pb":-84.40255},{"ob":33.78876,"pb":-84.40191},{"ob":33.78876,"pb":-84.40099000000001},{"ob":33.78876,"pb":-84.40082000000001},{"ob":33.78877,"pb":-84.40076},{"ob":33.788810000000005,"pb":-84.40060000000001},{"ob":33.78884,"pb":-84.40049},{"ob":33.788880000000006,"pb":-84.4004},{"ob":33.78895,"pb":-84.40027},{"ob":33.789060000000006,"pb":-84.40003}],"lat_lngs":[{"ob":33.788050000000005,"pb":-84.40452},{"ob":33.78819,"pb":-84.40425},{"ob":33.788540000000005,"pb":-84.40362},{"ob":33.788650000000004,"pb":-84.40345},{"ob":33.78871,"pb":-84.40334},{"ob":33.788740000000004,"pb":-84.40324000000001},{"ob":33.78875,"pb":-84.40311000000001},{"ob":33.78876,"pb":-84.40277},{"ob":33.78876,"pb":-84.40255},{"ob":33.78876,"pb":-84.40191},{"ob":33.78876,"pb":-84.40099000000001},{"ob":33.78876,"pb":-84.40082000000001},{"ob":33.78877,"pb":-84.40076},{"ob":33.788810000000005,"pb":-84.40060000000001},{"ob":33.78884,"pb":-84.40049},{"ob":33.788880000000006,"pb":-84.4004},{"ob":33.78895,"pb":-84.40027},{"ob":33.789060000000006,"pb":-84.40003}],"instructions":"Turn <b>right</b> onto <b>16th St NW</b>","start_point":{"ob":33.7880549,"pb":-84.40452149999999},"end_point":{"ob":33.7890627,"pb":-84.40003300000001}},{"distance":{"text":"0.2 mi","value":324},"duration":{"text":"1 min","value":42},"end_location":{"ob":33.7861959,"pb":-84.39980500000001},"maneuver":"turn-right","polyline":{"points":"slfmEdkcbOVQXOPINCpFBT@rBAjBA"},"start_location":{"ob":33.7890627,"pb":-84.40003300000001},"travel_mode":"DRIVING","encoded_lat_lngs":"slfmEdkcbOVQXOPINCpFBT@rBAjBA","path":[{"ob":33.789060000000006,"pb":-84.40003},{"ob":33.788940000000004,"pb":-84.39994},{"ob":33.788810000000005,"pb":-84.39986},{"ob":33.788720000000005,"pb":-84.39981},{"ob":33.78864,"pb":-84.39979000000001},{"ob":33.78743,"pb":-84.39981},{"ob":33.78732,"pb":-84.39982},{"ob":33.78674,"pb":-84.39981},{"ob":33.7862,"pb":-84.39980000000001}],"lat_lngs":[{"ob":33.789060000000006,"pb":-84.40003},{"ob":33.788940000000004,"pb":-84.39994},{"ob":33.788810000000005,"pb":-84.39986},{"ob":33.788720000000005,"pb":-84.39981},{"ob":33.78864,"pb":-84.39979000000001},{"ob":33.78743,"pb":-84.39981},{"ob":33.78732,"pb":-84.39982},{"ob":33.78674,"pb":-84.39981},{"ob":33.7862,"pb":-84.39980000000001}],"instructions":"Turn <b>right</b> onto <b>Mecaslin St NW</b>","start_point":{"ob":33.7890627,"pb":-84.40003300000001},"end_point":{"ob":33.7861959,"pb":-84.39980500000001}},{"distance":{"text":"0.4 mi","value":666},"duration":{"text":"1 min","value":74},"end_location":{"ob":33.786229,"pb":-84.40701389999998},"maneuver":"turn-right","polyline":{"points":"wzemEvicbO?hD?nC?dB?h@ApCA|G?xB?jA?bDArD?H"},"start_location":{"ob":33.7861959,"pb":-84.39980500000001},"travel_mode":"DRIVING","encoded_lat_lngs":"wzemEvicbO?hD?nC?dB?h@ApCA|G?xB?jA?bDArD?H","path":[{"ob":33.7862,"pb":-84.39980000000001},{"ob":33.7862,"pb":-84.40065000000001},{"ob":33.7862,"pb":-84.40137},{"ob":33.7862,"pb":-84.40188},{"ob":33.7862,"pb":-84.40209},{"ob":33.786210000000004,"pb":-84.40282},{"ob":33.78622,"pb":-84.40425},{"ob":33.78622,"pb":-84.40486000000001},{"ob":33.78622,"pb":-84.40524},{"ob":33.78622,"pb":-84.40606000000001},{"ob":33.78623,"pb":-84.40696000000001},{"ob":33.78623,"pb":-84.40701000000001}],"lat_lngs":[{"ob":33.7862,"pb":-84.39980000000001},{"ob":33.7862,"pb":-84.40065000000001},{"ob":33.7862,"pb":-84.40137},{"ob":33.7862,"pb":-84.40188},{"ob":33.7862,"pb":-84.40209},{"ob":33.786210000000004,"pb":-84.40282},{"ob":33.78622,"pb":-84.40425},{"ob":33.78622,"pb":-84.40486000000001},{"ob":33.78622,"pb":-84.40524},{"ob":33.78622,"pb":-84.40606000000001},{"ob":33.78623,"pb":-84.40696000000001},{"ob":33.78623,"pb":-84.40701000000001}],"instructions":"Turn <b>right</b> onto <b>14th St NW</b>","start_point":{"ob":33.7861959,"pb":-84.39980500000001},"end_point":{"ob":33.786229,"pb":-84.40701389999998}},{"distance":{"text":"0.6 mi","value":1023},"duration":{"text":"3 mins","value":173},"end_location":{"ob":33.7784019,"pb":-84.401295},"maneuver":"turn-left","polyline":{"points":"}zemExvdbONO`Ae@vBgAdAi@RIVMVMxDkBvJcFb@UXSTQTUJInBgBhB}ABEt@q@HIJIv@u@ZYp@m@|@_Ar@k@"},"start_location":{"ob":33.786229,"pb":-84.40701389999998},"travel_mode":"DRIVING","encoded_lat_lngs":"}zemExvdbONO`Ae@vBgAdAi@RIVMVMxDkBvJcFb@UXSTQTUJInBgBhB}ABEt@q@HIJIv@u@ZYp@m@|@_Ar@k@","path":[{"ob":33.78623,"pb":-84.40701000000001},{"ob":33.78615,"pb":-84.40693},{"ob":33.78582,"pb":-84.40674000000001},{"ob":33.78522,"pb":-84.40638000000001},{"ob":33.784870000000005,"pb":-84.40617},{"ob":33.78477,"pb":-84.40612},{"ob":33.784650000000006,"pb":-84.40605000000001},{"ob":33.784530000000004,"pb":-84.40598000000001},{"ob":33.7836,"pb":-84.40544000000001},{"ob":33.78172,"pb":-84.4043},{"ob":33.78154,"pb":-84.40419},{"ob":33.78141,"pb":-84.40409000000001},{"ob":33.7813,"pb":-84.40400000000001},{"ob":33.78119,"pb":-84.40389},{"ob":33.781130000000005,"pb":-84.40384},{"ob":33.780570000000004,"pb":-84.40332000000001},{"ob":33.78004,"pb":-84.40285},{"ob":33.78002,"pb":-84.40282},{"ob":33.77975,"pb":-84.40257000000001},{"ob":33.779700000000005,"pb":-84.40252000000001},{"ob":33.77964,"pb":-84.40247000000001},{"ob":33.779360000000004,"pb":-84.40220000000001},{"ob":33.77922,"pb":-84.40207000000001},{"ob":33.77897,"pb":-84.40184},{"ob":33.77866,"pb":-84.40152},{"ob":33.778400000000005,"pb":-84.4013}],"lat_lngs":[{"ob":33.78623,"pb":-84.40701000000001},{"ob":33.78615,"pb":-84.40693},{"ob":33.78582,"pb":-84.40674000000001},{"ob":33.78522,"pb":-84.40638000000001},{"ob":33.784870000000005,"pb":-84.40617},{"ob":33.78477,"pb":-84.40612},{"ob":33.784650000000006,"pb":-84.40605000000001},{"ob":33.784530000000004,"pb":-84.40598000000001},{"ob":33.7836,"pb":-84.40544000000001},{"ob":33.78172,"pb":-84.4043},{"ob":33.78154,"pb":-84.40419},{"ob":33.78141,"pb":-84.40409000000001},{"ob":33.7813,"pb":-84.40400000000001},{"ob":33.78119,"pb":-84.40389},{"ob":33.781130000000005,"pb":-84.40384},{"ob":33.780570000000004,"pb":-84.40332000000001},{"ob":33.78004,"pb":-84.40285},{"ob":33.78002,"pb":-84.40282},{"ob":33.77975,"pb":-84.40257000000001},{"ob":33.779700000000005,"pb":-84.40252000000001},{"ob":33.77964,"pb":-84.40247000000001},{"ob":33.779360000000004,"pb":-84.40220000000001},{"ob":33.77922,"pb":-84.40207000000001},{"ob":33.77897,"pb":-84.40184},{"ob":33.77866,"pb":-84.40152},{"ob":33.778400000000005,"pb":-84.4013}],"instructions":"Turn <b>left</b> onto <b>Hemphill Ave NW</b>","start_point":{"ob":33.786229,"pb":-84.40701389999998},"end_point":{"ob":33.7784019,"pb":-84.401295}},{"distance":{"text":"0.2 mi","value":329},"duration":{"text":"1 min","value":48},"end_location":{"ob":33.778252,"pb":-84.39779659999999},"maneuver":"turn-left","polyline":{"points":"_jdmEbscbOK_@EWCWAY@s@@WFe@Lo@R{A@M?K@]?Q?KB}F"},"start_location":{"ob":33.7784019,"pb":-84.401295},"travel_mode":"DRIVING","encoded_lat_lngs":"_jdmEbscbOK_@EWCWAY@s@@WFe@Lo@R{A@M?K@]?Q?KB}F","path":[{"ob":33.778400000000005,"pb":-84.4013},{"ob":33.77846,"pb":-84.40114000000001},{"ob":33.778490000000005,"pb":-84.40102},{"ob":33.778510000000004,"pb":-84.40090000000001},{"ob":33.77852,"pb":-84.40077000000001},{"ob":33.778510000000004,"pb":-84.40051000000001},{"ob":33.7785,"pb":-84.40039},{"ob":33.77846,"pb":-84.40020000000001},{"ob":33.77839,"pb":-84.39996000000001},{"ob":33.778290000000005,"pb":-84.3995},{"ob":33.77828,"pb":-84.39943000000001},{"ob":33.77828,"pb":-84.39937},{"ob":33.778270000000006,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39913000000001},{"ob":33.778270000000006,"pb":-84.39907000000001},{"ob":33.77825,"pb":-84.3978}],"lat_lngs":[{"ob":33.778400000000005,"pb":-84.4013},{"ob":33.77846,"pb":-84.40114000000001},{"ob":33.778490000000005,"pb":-84.40102},{"ob":33.778510000000004,"pb":-84.40090000000001},{"ob":33.77852,"pb":-84.40077000000001},{"ob":33.778510000000004,"pb":-84.40051000000001},{"ob":33.7785,"pb":-84.40039},{"ob":33.77846,"pb":-84.40020000000001},{"ob":33.77839,"pb":-84.39996000000001},{"ob":33.778290000000005,"pb":-84.3995},{"ob":33.77828,"pb":-84.39943000000001},{"ob":33.77828,"pb":-84.39937},{"ob":33.778270000000006,"pb":-84.39922000000001},{"ob":33.778270000000006,"pb":-84.39913000000001},{"ob":33.778270000000006,"pb":-84.39907000000001},{"ob":33.77825,"pb":-84.3978}],"instructions":"Turn <b>left</b> onto <b>Ferst Dr</b>","start_point":{"ob":33.7784019,"pb":-84.401295},"end_point":{"ob":33.778252,"pb":-84.39779659999999}},{"distance":{"text":"305 ft","value":93},"duration":{"text":"1 min","value":17},"end_location":{"ob":33.7774125,"pb":-84.39780630000001},"maneuver":"turn-right","polyline":{"points":"aidmEf}bbO~A?fA@"},"start_location":{"ob":33.778252,"pb":-84.39779659999999},"travel_mode":"DRIVING","encoded_lat_lngs":"aidmEf}bbO~A?fA@","path":[{"ob":33.77825,"pb":-84.3978},{"ob":33.777770000000004,"pb":-84.3978},{"ob":33.77741,"pb":-84.39781}],"lat_lngs":[{"ob":33.77825,"pb":-84.3978},{"ob":33.777770000000004,"pb":-84.3978},{"ob":33.77741,"pb":-84.39781}],"instructions":"Turn <b>right</b> onto <b>Atlantic Dr NW</b><div style=\"font-size:0.9em\">Destination will be on the right</div>","start_point":{"ob":33.778252,"pb":-84.39779659999999},"end_point":{"ob":33.7774125,"pb":-84.39780630000001}}],"via_waypoint":[{"location":{"ob":33.786218,"pb":-84.40504809999999},"step_index":3,"step_interpolation":0.7273068400050973}],"via_waypoints":[{"ob":33.786218,"pb":-84.40504809999999}]}],"overview_polyline":{"points":"uefmExfdbOSL[u@{A_DQi@C}A?eKIk@Mg@c@iAp@a@`@MfGD~EC?xHC~PA|O?HNOxDmBhCoApPoI|@i@fDyClD_DpCgC|@_Ar@k@Qw@Eq@BkATuATiB@gAB}F~A?fA@"},"summary":"Hemphill Ave NW","warnings":[],"waypoint_order":[],"overview_path":[{"ob":33.78795,"pb":-84.40445000000001},{"ob":33.788050000000005,"pb":-84.40452},{"ob":33.78819,"pb":-84.40425},{"ob":33.788650000000004,"pb":-84.40345},{"ob":33.788740000000004,"pb":-84.40324000000001},{"ob":33.78876,"pb":-84.40277},{"ob":33.78876,"pb":-84.40082000000001},{"ob":33.788810000000005,"pb":-84.40060000000001},{"ob":33.788880000000006,"pb":-84.4004},{"ob":33.789060000000006,"pb":-84.40003},{"ob":33.788810000000005,"pb":-84.39986},{"ob":33.78864,"pb":-84.39979000000001},{"ob":33.78732,"pb":-84.39982},{"ob":33.7862,"pb":-84.39980000000001},{"ob":33.7862,"pb":-84.40137},{"ob":33.78622,"pb":-84.40425},{"ob":33.78623,"pb":-84.40696000000001},{"ob":33.78623,"pb":-84.40701000000001},{"ob":33.78615,"pb":-84.40693},{"ob":33.78522,"pb":-84.40638000000001},{"ob":33.784530000000004,"pb":-84.40598000000001},{"ob":33.78172,"pb":-84.4043},{"ob":33.78141,"pb":-84.40409000000001},{"ob":33.780570000000004,"pb":-84.40332000000001},{"ob":33.779700000000005,"pb":-84.40252000000001},{"ob":33.77897,"pb":-84.40184},{"ob":33.77866,"pb":-84.40152},{"ob":33.778400000000005,"pb":-84.4013},{"ob":33.778490000000005,"pb":-84.40102},{"ob":33.77852,"pb":-84.40077000000001},{"ob":33.7785,"pb":-84.40039},{"ob":33.77839,"pb":-84.39996000000001},{"ob":33.77828,"pb":-84.39943000000001},{"ob":33.778270000000006,"pb":-84.39907000000001},{"ob":33.77825,"pb":-84.3978},{"ob":33.777770000000004,"pb":-84.3978},{"ob":33.77741,"pb":-84.39781}]}],"status":"OK","Zb":{"origin":"470 16th Street, Atlanta, GA, United States","destination":"801 Atlantic Drive Atlanta, GA 30332","waypoints":[],"provideRouteAlternatives":true,"travelMode":"DRIVING","unitSystem":1}}';
                $json = CJSON::decode($json_string);
                $ret_json = array();
                foreach ($json['routes'] as $route) {
                    foreach ($route['legs'] as $leg) {
                        foreach ($leg['steps'] as $step) {
                            $latitude = $step['end_location']['ob'];
                            $longitude = $step['end_location']['pb'];
                            $nodeArray = ThreatType::model()->getCountAndType($latitude, $longitude);
                            $ret_json[] = array('latitude'=>$latitude,'longitude'=>$longitude,'count'=>$nodeArray['count'],'maxcrimetype'=>$nodeArray['maxcrimetype']);                        }   
                    }       
                }
                echo CJSON::encode($ret_json);
        }
	// Uncomment the following methods and override them if needed
	/*
	public function filters()
	{
		// return the filter configuration for this controller, e.g.:
		return array(
			'inlineFilterName',
			array(
				'class'=>'path.to.FilterClass',
				'propertyName'=>'propertyValue',
			),
		);
	}

	public function actions()
	{
		// return external action classes, e.g.:
		return array(
			'action1'=>'path.to.ActionClass',
			'action2'=>array(
				'class'=>'path.to.AnotherActionClass',
				'propertyName'=>'propertyValue',
			),
		);
	}
	*/
}