import { Component, OnInit, TemplateRef } from '@angular/core';
import { CommonServiceService } from '../../common-service.service';

@Component({
  selector: 'app-ratings',
  templateUrl: './ratings.component.html',
  styleUrls: ['./ratings.component.css'],
})
export class RatingsComponent implements OnInit {
  reports: any = [];
  errorMessage: string;
  constructor(public commonService: CommonServiceService) {}

  ngOnInit(): void {
    this.getCompletedReports();
  }

  getCompletedReports() {
    this.commonService.getCompletedReports().subscribe(
      (res) => {
        this.reports = res;
        $(function () {
          $('table').DataTable();
        });
      },
      (error) => (this.errorMessage = <any>error)
    );
  }
}
