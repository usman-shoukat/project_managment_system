import { Component, OnInit } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-payments',
  templateUrl: './payments.component.html',
  styleUrls: ['./payments.component.css']
})
export class PaymentsComponent implements OnInit {
  allReports: any = [];
  errorMessage: string;
  constructor(public commonService: CommonServiceService) { }

  ngOnInit(): void {
    this.getAllReports();
  }
  getAllReports() {
    this.commonService.getAllReports().subscribe(
      (res) => {
        this.allReports = res;
        $(function () {
          $('table').DataTable();
        });
      },
      (error) => (this.errorMessage = <any>error)
    );
  }

}
